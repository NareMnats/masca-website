(() => {
    const calendarElement = document.getElementById("masca-events-calendar");

    if (!calendarElement || typeof FullCalendar === "undefined" || typeof mascaEvents === "undefined") {
        return;
    }

    const dialog = document.getElementById("event-dialog");
    const dialogContent = document.getElementById("event-dialog-content");
    const searchInput = document.getElementById("events-search-input");
    const typeFilter = document.getElementById("events-type-filter");
    const yearFilter = document.getElementById("events-year-filter");
    let searchTimer;

    const escapeHtml = (value = "") => {
        const div = document.createElement("div");
        div.textContent = value;
        return div.innerHTML;
    };

    const status = (event) => ((event.end || event.start) < new Date() ? "Past Event" : "Upcoming Event");

    const eventTypeClass = (event) => {
        const types = event.extendedProps.types || [];
        return types.length ? `type-${types[0].slug}` : "type-default";
    };

    const formatEventDate = (event) => {
        const dateOptions = { month: "long", day: "numeric", year: "numeric" };
        const startDate = event.start.toLocaleDateString(undefined, dateOptions);

        if (event.allDay) {
            return startDate;
        }

        const startTime = event.start.toLocaleTimeString(undefined, {
            hour: "numeric",
            minute: "2-digit",
        });

        if (!event.end) {
            return `${startDate} at ${startTime}`;
        }

        const endDate = event.end.toLocaleDateString(undefined, dateOptions);
        const endTime = event.end.toLocaleTimeString(undefined, {
            hour: "numeric",
            minute: "2-digit",
        });

        return startDate === endDate
            ? `${startDate}, ${startTime}–${endTime}`
            : `${startDate}, ${startTime}–${endDate}, ${endTime}`;
    };

    const endpoint = () => {
        const url = new URL(mascaEvents.endpoint);

        if (typeFilter.value) {
            url.searchParams.set("type", typeFilter.value);
        }

        if (searchInput.value.trim()) {
            url.searchParams.set("search", searchInput.value.trim());
        }

        return url.toString();
    };

    const showEventDialog = (event) => {
        const props = event.extendedProps;
        const eventStatus = status(event);

        const actions = [
            `<a class="event-button primary" href="${event.url}">View Full Details</a>`,
            props.registrationUrl && eventStatus !== "Past Event"
                ? `<a class="event-button primary" href="${props.registrationUrl}" target="_blank" rel="noopener">RSVP / Register</a>`
                : "",
            props.mapsUrl
                ? `<a class="event-button secondary" href="${props.mapsUrl}" target="_blank" rel="noopener">Directions</a>`
                : "",
            props.icsUrl
                ? `<a class="event-button secondary" href="${props.icsUrl}">Add to Calendar</a>`
                : "",
            props.galleryUrl
                ? `<a class="event-button secondary" href="${props.galleryUrl}">View Photo Gallery</a>`
                : "",
        ].join("");

        dialogContent.innerHTML = `
            ${props.imageUrl ? `<img class="event-dialog__image" src="${props.imageUrl}" alt="">` : ""}
            <div class="event-dialog__body">
                <p class="event-dialog__status">${escapeHtml(eventStatus)}</p>
                <h2>${escapeHtml(event.title)}</h2>
                <p><strong>${escapeHtml(formatEventDate(event))}</strong></p>
                ${props.location ? `<p>${escapeHtml(props.location)}</p>` : ""}
                ${props.excerpt ? `<p>${escapeHtml(props.excerpt)}</p>` : ""}
                <div class="event-dialog__actions">${actions}</div>
            </div>
        `;

        dialog.showModal();
    };

    const calendar = new FullCalendar.Calendar(calendarElement, {
        initialView: window.innerWidth < 720 ? "listMonth" : "dayGridMonth",
        height: "auto",
        fixedWeekCount: false,
        navLinks: true,
        dayMaxEvents: 3,
        headerToolbar: {
            left: "prev,next today",
            center: "title",
            right: "",
        },
        eventSources: [
            {
                events(info, success, failure) {
                    fetch(endpoint())
                        .then((response) => response.json())
                        .then(success)
                        .catch(failure);
                },
            },
        ],
        eventClassNames(info) {
            return [eventTypeClass(info.event)];
        },
        eventClick(info) {
            info.jsEvent.preventDefault();
            showEventDialog(info.event);
        },
    });

    calendar.render();

    const currentYear = new Date().getFullYear();

    for (let year = currentYear + 5; year >= currentYear - 10; year -= 1) {
        const option = document.createElement("option");
        option.value = String(year);
        option.textContent = String(year);
        yearFilter.appendChild(option);
    }

    yearFilter.addEventListener("change", () => {
        if (yearFilter.value) {
            calendar.gotoDate(`${yearFilter.value}-01-01`);
        }
    });

    typeFilter.addEventListener("change", () => calendar.refetchEvents());

    searchInput.addEventListener("input", () => {
        clearTimeout(searchTimer);
        searchTimer = setTimeout(() => calendar.refetchEvents(), 300);
    });

    document.querySelectorAll("[data-events-view]").forEach((button) => {
        button.addEventListener("click", () => {
            calendar.changeView(button.dataset.eventsView);

            document.querySelectorAll("[data-events-view]").forEach((item) => {
                item.classList.remove("is-active");
            });

            button.classList.add("is-active");
        });
    });

    dialog.querySelector(".event-dialog__close").addEventListener("click", () => dialog.close());

    dialog.addEventListener("click", (event) => {
        if (event.target === dialog) {
            dialog.close();
        }
    });
})();
