const themeUrl =
  window.mascaTheme?.themeUrl || "";
const siteUrl =
  window.mascaTheme?.homeUrl || "/";
document.addEventListener("DOMContentLoaded", () => {
  const body = document.body;
  const header = document.querySelector(".site-header");
  const openButton = document.querySelector(".menu-toggle");
  const closeButton = document.querySelector(".menu-panel__close");
  const panel = document.querySelector(".menu-panel");
  const backdrop = document.querySelector(".menu-backdrop");
  const navigation = document.querySelector(".panel-navigation");
  const panelImage = document.querySelector(".menu-panel__image");

  if (
    !(openButton instanceof HTMLButtonElement) ||
    !(closeButton instanceof HTMLButtonElement) ||
    !(panel instanceof HTMLElement) ||
    !(backdrop instanceof HTMLElement)
  ) {
    return;
  }

  const themePath =
    `${themeUrl}/assets/images/navigation`;

  const imageMap = {
    home: `${themePath}/nav-home.jpg`,
    "what is masca": `${themePath}/nav-whatismasca.jpg`,
    "what is masca?": `${themePath}/nav-whatismasca.jpg`,
    "our history": `${themePath}/nav-history.png`,
    "meet our leaders": `${themePath}/nav-meetourleaders.jpg`,
    "how to join or donate": `${themePath}/nav-donate.png`,
    "ambassador program": `${themePath}/nav_ambassadorprogram.jpg`,
    "2026 ambassadors": `${themePath}/nav-2026ambassadors.jpg`,
    application: `${themePath}/nav-application.jpg`,
    galleries: `${themePath}/nav-galleries.jpg`,
    "legacy book": `${themePath}/nav-legacybook.png`,
    "community exchange":
      `${themeUrl}/assets/images/community-exchange/community-exchange.jpg`,
    "past student ambassadors": `${themePath}/nav-pastambassadors.png`,
    scholarship: `${themePath}/nav-scholarships.jpg`,
    "contact us": `${themePath}/contact.png`,
  };

  const defaultImage = `${themePath}/nav-default.png`;
  let previouslyFocusedElement = null;
  let previousScrollY = window.scrollY;
  let scrollTicking = false;

  panelImage?.addEventListener("error", () => {
    if (
      panelImage instanceof HTMLImageElement &&
      !panelImage.src.endsWith("/nav-default.png")
    ) {
      panelImage.src = defaultImage;
    }
  });

  const updateHeaderVisibility = () => {
    if (!(header instanceof HTMLElement)) {
      return;
    }

    const currentScrollY = Math.max(window.scrollY, 0);
    const scrollDifference = currentScrollY - previousScrollY;

    if (currentScrollY <= header.offsetHeight) {
      header.classList.remove("is-hidden");
    } else if (
      scrollDifference > 0 &&
      !body.classList.contains("menu-is-open")
    ) {
      header.classList.add("is-hidden");
    } else if (scrollDifference < 0) {
      header.classList.remove("is-hidden");
    }

    previousScrollY = currentScrollY;
    scrollTicking = false;
  };

  window.addEventListener(
    "scroll",
    () => {
      if (!scrollTicking) {
        window.requestAnimationFrame(updateHeaderVisibility);
        scrollTicking = true;
      }
    },
    { passive: true }
  );

  const getFocusableElements = () => {
    return Array.from(
      panel.querySelectorAll(
        'a[href], button:not([disabled]), [tabindex]:not([tabindex="-1"])'
      )
    ).filter((element) => element instanceof HTMLElement);
  };

  const openMenu = () => {
    previouslyFocusedElement =
      document.activeElement instanceof HTMLElement
        ? document.activeElement
        : null;

    openButton.setAttribute("aria-expanded", "true");
    panel.setAttribute("aria-hidden", "false");

    body.classList.add("menu-is-open");
    header?.classList.remove("is-hidden");
    panel.classList.add("is-open");
    backdrop.classList.add("is-visible");

    window.setTimeout(() => {
      closeButton.focus();
    }, 250);
  };

  const closeMenu = () => {
    openButton.setAttribute("aria-expanded", "false");
    panel.setAttribute("aria-hidden", "true");

    body.classList.remove("menu-is-open");
    panel.classList.remove("is-open");
    backdrop.classList.remove("is-visible");

    if (panelImage instanceof HTMLImageElement) {
      panelImage.src = defaultImage;
    }

    previouslyFocusedElement?.focus();
  };

  openButton.addEventListener("click", openMenu);
  closeButton.addEventListener("click", closeMenu);
  backdrop.addEventListener("click", closeMenu);

  navigation?.addEventListener("click", (event) => {
    if (event.target instanceof HTMLAnchorElement) {
      closeMenu();
    }
  });

  navigation?.querySelectorAll("a").forEach((link) => {
    link.addEventListener("mouseenter", () => {
      if (!(panelImage instanceof HTMLImageElement)) {
        return;
      }

      const linkText = link.textContent
        ?.trim()
        .toLowerCase();

      const nextImage =
        imageMap[linkText ?? ""] ?? defaultImage;
      panelImage.classList.add("is-changing");
      window.setTimeout(() => {
        panelImage.src = nextImage;
        panelImage.classList.remove("is-changing");
      }, 140);
    });

    link.addEventListener("focus", () => {
      if (!(panelImage instanceof HTMLImageElement)) {
        return;
      }

      const linkText = link.textContent
        ?.trim()
        .toLowerCase();

      const nextImage = imageMap[linkText ?? ""] ?? defaultImage;

      panelImage.classList.add("is-changing");

      window.setTimeout(() => {
        panelImage.src = nextImage;
        panelImage.classList.remove("is-changing");
      }, 140);
    });
  });

  navigation?.addEventListener("mouseleave", () => {
    if (panelImage instanceof HTMLImageElement) {
      panelImage.src = defaultImage;
    }
  });

  document.addEventListener("keydown", (event) => {
    if (!panel.classList.contains("is-open")) {
      return;
    }

    if (event.key === "Escape") {
      closeMenu();
      return;
    }

    if (event.key !== "Tab") {
      return;
    }

    const focusableElements = getFocusableElements();

    if (focusableElements.length === 0) {
      return;
    }

    const firstElement = focusableElements[0];
    const lastElement =
      focusableElements[focusableElements.length - 1];

    if (
      event.shiftKey &&
      document.activeElement === firstElement
    ) {
      event.preventDefault();
      lastElement.focus();
    } else if (
      !event.shiftKey &&
      document.activeElement === lastElement
    ) {
      event.preventDefault();
      firstElement.focus();
    }
  });
});

/* ========================================
   MASCA Event Calendar
======================================== */

const calendarGrid = document.querySelector("[data-calendar-grid]");
const calendarMobileList = document.querySelector(
  "[data-calendar-mobile-list]"
);
const calendarMonthLabel = document.querySelector(
  "[data-calendar-month]"
);
const previousMonthButton = document.querySelector(
  "[data-calendar-previous]"
);
const nextMonthButton = document.querySelector(
  "[data-calendar-next]"
);
const eventModal = document.querySelector("[data-event-modal]");

async function initializeMascaCalendar() {
  if (
    !calendarGrid ||
    !calendarMobileList ||
    !calendarMonthLabel
  ) {
    return;
  }

  const getValidDatePortion = (start) => {
    if (typeof start !== "string") {
      return "";
    }

    const date = start.split("T")[0];
    const match = date.match(/^(\d{4})-(\d{2})-(\d{2})$/);

    if (!match) {
      return "";
    }

    const year = Number(match[1]);
    const month = Number(match[2]);
    const day = Number(match[3]);
    const parsedDate = new Date(year, month - 1, day);

    return parsedDate.getFullYear() === year &&
      parsedDate.getMonth() === month - 1 &&
      parsedDate.getDate() === day
      ? date
      : "";
  };

  const formatRestEventTime = (event) => {
    if (event.allDay) {
      return "All day";
    }

    const formatTime = (value) => {
      if (typeof value !== "string" || !value.includes("T")) {
        return "";
      }

      const date = new Date(value);

      if (Number.isNaN(date.getTime())) {
        return "";
      }

      return date.toLocaleTimeString("en-US", {
        hour: "numeric",
        minute: "2-digit",
      });
    };

    const startTime = formatTime(event.start);
    const endTime = formatTime(event.end);

    if (!startTime) {
      return "";
    }

    return endTime ? `${startTime}–${endTime}` : startTime;
  };

  let mascaEvents = [];

  try {
    const endpoint =
      `${siteUrl.replace(/\/$/, "")}/wp-json/masca/v1/events`;
    const response = await fetch(endpoint);

    if (!response.ok) {
      throw new Error(
        `MASCA events request failed with status ${response.status}`
      );
    }

    const restEvents = await response.json();

    if (!Array.isArray(restEvents)) {
      throw new TypeError("MASCA events response must be an array");
    }

    mascaEvents = restEvents
      .map((event) => {
        const date = getValidDatePortion(event.start);

        if (!date) {
          return null;
        }

        return {
          title: event.title || "",
          date,
          time: formatRestEventTime(event),
          location: event.location || "",
          address: "",
          description: event.excerpt || "",
          flyer: event.imageUrl || "",
          link: event.url || "",
        };
      })
      .filter(Boolean);
  } catch (error) {
    console.error("Unable to load MASCA events:", error);
    mascaEvents = [];
  }

  const today = new Date();

  const parseEventDate = (dateString) => {
    return new Date(`${dateString}T12:00:00`);
  };

  let visibleMonth = new Date(today.getFullYear(), today.getMonth(), 1);

  let lastFocusedElement = null;

  const formatFullDate = (dateString) => {
    return parseEventDate(dateString).toLocaleDateString(
      "en-US",
      {
        weekday: "long",
        month: "long",
        day: "numeric",
        year: "numeric",
      }
    );
  };

  const formatMobileDay = (dateString) => {
    return parseEventDate(dateString).toLocaleDateString(
      "en-US",
      {
        day: "numeric",
      }
    );
  };

  const formatMobileWeekday = (dateString) => {
    return parseEventDate(dateString).toLocaleDateString(
      "en-US",
      {
        weekday: "short",
      }
    );
  };

  const getEventsForMonth = (year, month) => {
    return mascaEvents
      .filter((event) => {
        const eventDate = parseEventDate(event.date);

        return (
          eventDate.getFullYear() === year &&
          eventDate.getMonth() === month
        );
      })
      .sort(
        (firstEvent, secondEvent) =>
          parseEventDate(firstEvent.date) -
          parseEventDate(secondEvent.date)
      );
  };

  const openEventModal = (eventData, trigger) => {
    if (!eventModal) {
      return;
    }

    lastFocusedElement = trigger;

    const modalMedia = eventModal.querySelector(
      "[data-event-modal-media]"
    );
    const modalImage = eventModal.querySelector(
      "[data-event-modal-image]"
    );
    const modalTitle = eventModal.querySelector(
      "[data-event-modal-title]"
    );
    const modalDate = eventModal.querySelector(
      "[data-event-modal-date]"
    );
    const modalTime = eventModal.querySelector(
      "[data-event-modal-time]"
    );
    const modalLocation = eventModal.querySelector(
      "[data-event-modal-location]"
    );
    const modalDescription = eventModal.querySelector(
      "[data-event-modal-description]"
    );
    const modalLink = eventModal.querySelector(
      "[data-event-modal-link]"
    );

    modalTitle.textContent = eventData.title;
    modalDate.textContent = formatFullDate(eventData.date);
    modalTime.textContent = eventData.time || "";

    modalLocation.textContent = [
      eventData.location,
      eventData.address,
    ]
      .filter(Boolean)
      .join(" · ");

    modalDescription.textContent =
      eventData.description || "";

    if (eventData.flyer) {
      modalImage.src = eventData.flyer;
      modalImage.alt = `${eventData.title} event flyer`;
      modalMedia.hidden = false;
    } else {
      modalImage.removeAttribute("src");
      modalImage.alt = "";
      modalMedia.hidden = true;
    }

    if (eventData.link) {
      modalLink.href = eventData.link;
      modalLink.hidden = false;
    } else {
      modalLink.removeAttribute("href");
      modalLink.hidden = true;
    }

    eventModal.classList.add("is-open");
    eventModal.setAttribute("aria-hidden", "false");
    document.body.classList.add("event-modal-is-open");

    const closeButton = eventModal.querySelector(
      ".event-modal__close"
    );

    closeButton?.focus();
  };

  const closeEventModal = () => {
    if (!eventModal) {
      return;
    }

    eventModal.classList.remove("is-open");
    eventModal.setAttribute("aria-hidden", "true");
    document.body.classList.remove("event-modal-is-open");

    lastFocusedElement?.focus();
  };

  const createCalendarDot = (eventData) => {
    const button = document.createElement("button");

    button.type = "button";
    button.className = "calendar-event-dot";
    button.setAttribute(
      "aria-label",
      `${eventData.title}, ${formatFullDate(eventData.date)}`
    );

    const tooltip = document.createElement("span");
    tooltip.className = "calendar-event-dot__tooltip";
    tooltip.textContent = eventData.title;

    button.appendChild(tooltip);

    button.addEventListener("click", () => {
      openEventModal(eventData, button);
    });

    return button;
  };

  const createMobileEvent = (eventData) => {
    const article = document.createElement("article");
    article.className = "mobile-event";

    const dateColumn = document.createElement("div");
    dateColumn.className = "mobile-event__date";

    const weekday = document.createElement("span");
    weekday.className = "mobile-event__weekday";
    weekday.textContent = formatMobileWeekday(
      eventData.date
    );

    const day = document.createElement("span");
    day.className = "mobile-event__day";
    day.textContent = formatMobileDay(eventData.date);

    const eventButton = document.createElement("button");
    eventButton.type = "button";
    eventButton.className = "mobile-event__button";

    const content = document.createElement("span");
    content.className = "mobile-event__content";

    const title = document.createElement("strong");
    title.textContent = eventData.title;

    const time = document.createElement("span");
    time.textContent = eventData.time || "";

    const location = document.createElement("span");
    location.textContent = eventData.location || "";

    const arrow = document.createElement("span");
    arrow.className = "mobile-event__arrow";
    arrow.setAttribute("aria-hidden", "true");
    arrow.textContent = "→";

    dateColumn.append(weekday, day);
    content.append(title, time, location);
    eventButton.append(content, arrow);
    article.append(dateColumn, eventButton);

    eventButton.addEventListener("click", () => {
      openEventModal(eventData, eventButton);
    });

    return article;
  };

  const renderCalendar = () => {
    const year = visibleMonth.getFullYear();
    const month = visibleMonth.getMonth();

    const firstWeekday = new Date(
      year,
      month,
      1
    ).getDay();

    const daysInMonth = new Date(
      year,
      month + 1,
      0
    ).getDate();

    const previousMonthDays = new Date(
      year,
      month,
      0
    ).getDate();

    const monthEvents = getEventsForMonth(year, month);

    calendarMonthLabel.textContent =
      visibleMonth.toLocaleDateString("en-US", {
        month: "long",
        year: "numeric",
      });

    calendarGrid.innerHTML = "";
    calendarMobileList.innerHTML = "";

    for (
      let emptyIndex = firstWeekday - 1;
      emptyIndex >= 0;
      emptyIndex -= 1
    ) {
      const previousDay =
        previousMonthDays - emptyIndex;

      const dayCell = document.createElement("div");
      dayCell.className =
        "events-calendar__day events-calendar__day--outside";

      const dayNumber = document.createElement("span");
      dayNumber.className =
        "events-calendar__day-number";
      dayNumber.textContent = previousDay;

      dayCell.appendChild(dayNumber);
      calendarGrid.appendChild(dayCell);
    }

    for (
      let dayNumber = 1;
      dayNumber <= daysInMonth;
      dayNumber += 1
    ) {
      const dayCell = document.createElement("div");
      dayCell.className = "events-calendar__day";

      const number = document.createElement("span");
      number.className =
        "events-calendar__day-number";
      number.textContent = dayNumber;

      const dateEvents = monthEvents.filter(
        (event) =>
          parseEventDate(event.date).getDate() ===
          dayNumber
      );

      const indicators = document.createElement("div");
      indicators.className =
        "events-calendar__indicators";

      dateEvents.forEach((eventData) => {
        indicators.appendChild(
          createCalendarDot(eventData)
        );
      });

      dayCell.append(number, indicators);
      calendarGrid.appendChild(dayCell);
    }

    const renderedCells =
      firstWeekday + daysInMonth;

    const remainingCells =
      renderedCells <= 35
        ? 35 - renderedCells
        : 42 - renderedCells;

    for (
      let nextDay = 1;
      nextDay <= remainingCells;
      nextDay += 1
    ) {
      const dayCell = document.createElement("div");
      dayCell.className =
        "events-calendar__day events-calendar__day--outside";

      const number = document.createElement("span");
      number.className =
        "events-calendar__day-number";
      number.textContent = nextDay;

      dayCell.appendChild(number);
      calendarGrid.appendChild(dayCell);
    }

    if (monthEvents.length) {
      monthEvents.forEach((eventData) => {
        calendarMobileList.appendChild(
          createMobileEvent(eventData)
        );
      });
    } else {
      const emptyMessage = document.createElement("p");
      emptyMessage.className =
        "events-calendar__empty";
      emptyMessage.textContent =
        "No MASCA events are currently scheduled for this month.";

      calendarMobileList.appendChild(emptyMessage);
    }
  };

  previousMonthButton?.addEventListener(
    "click",
    () => {
      visibleMonth = new Date(
        visibleMonth.getFullYear(),
        visibleMonth.getMonth() - 1,
        1
      );

      renderCalendar();
    }
  );

  nextMonthButton?.addEventListener(
    "click",
    () => {
      visibleMonth = new Date(
        visibleMonth.getFullYear(),
        visibleMonth.getMonth() + 1,
        1
      );

      renderCalendar();
    }
  );

  eventModal
    ?.querySelectorAll("[data-event-modal-close]")
    .forEach((closeElement) => {
      closeElement.addEventListener(
        "click",
        closeEventModal
      );
    });

  document.addEventListener("keydown", (event) => {
    if (
      event.key === "Escape" &&
      eventModal?.classList.contains("is-open")
    ) {
      closeEventModal();
    }
  });

  renderCalendar();
}

initializeMascaCalendar();
