
# Project Blueprint

## 1. Purpose & Capabilities

This project is a full-stack web application built with the Laravel framework. It aims to be a modern, performant, and secure application, leveraging Laravel for its powerful backend features and Blade for templating.

## 2. Project Outline

### Style & Design:

*   **CSS Framework:** Tailwind CSS
*   **Primary Font:** Inter
*   **Color Palette:**
    *   **Background:** #FDFBF7 (A very light, almost white, off-white)
    *   **Text:** #1A1A1A (A very dark, almost black, gray)
*   **Texture:** A subtle grain overlay is used on the body to give a premium, tactile feel.
*   **Visual Effects:** Multi-layered drop shadows are used to create a sense of depth.

### Features:

*   **Routing:** The application uses Laravel's routing to map URLs to controller actions.
*   **Controllers:** Controllers handle the application logic, process requests, and return responses.
*   **Views:** Blade templates are used for creating the user interface.
*   **Models:** Eloquent ORM is used for database interactions.
*   **Frontend Assets:** Vite is used to compile and bundle frontend assets.

## 3. Current Task

Analyze the entire project and provide a detailed explanation of its structure, codebase, and functionality.

## 4. Pseudocode

### Routing (`routes/web.php`)

```
WHEN a user sends a GET request to the homepage ("/"):
  SHOW the "welcome" view.

WHEN a user sends a GET request to "/about":
  CALL the "about" function in the PageController.

WHEN a user sends a GET request to "/classifieds":
  CALL the "classifieds" function in the PageController.

WHEN a user sends a GET request to "/blog":
  CALL the "blog" function in the PageController.

WHEN a user sends a GET request to "/contact":
  CALL the "contact" function in the PageController.

WHEN a user sends a GET request to "/signin":
  CALL the "signin" function in the PageController.

WHEN a user sends a GET request to "/signup":
  CALL the "signup" function in the PageController.

WHEN a user sends a GET request to "/services-data":
  CALL the "getServicesData" function in the PageController.

WHEN a user sends a GET request to "/fixora-landing":
  CALL the "index" function in the LandingPageController.
```

### Controller Logic (`app/Http/Controllers/PageController.php`)

```
FUNCTION about():
  RETURN the "pages.about" view.

FUNCTION classifieds():
  RETURN the "pages.classifieds" view.

FUNCTION blog():
  RETURN the "pages.blog" view.

FUNCTION contact():
  RETURN the "pages.contact" view.

FUNCTION signin():
  RETURN the "pages.signin" view.

FUNCTION signup():
  RETURN the "pages.signup" view.

FUNCTION getServicesData():
  CREATE a list of services, where each service has a name and a list of technology icons.
  RETURN this list as a JSON object.
```

### Interactive Component (`resources/views/components/our-services.blade.php`)

```
// Data for the component
DEFINE a map called SERVICE_MAP with keys for each service ("ai-solutions", "web-dev", etc.).
EACH service in the map has:
  - a centerIcon name.
  - a list of associated technologies.

// When the page loads
GET all elements with the class "service-orbit".
GET all elements with the class "filter-chip".
GET the element for the center icon.

// Function to activate a service when clicked
FUNCTION activateService(serviceName):
  // Highlight the correct orbital item
  FOR EACH orbital item:
    IF the item's service name matches the activated one:
      ADD the "active" class.
      REMOVE the "opacity-60" class.
    ELSE:
      REMOVE the "active" class.
      ADD the "opacity-60" class.

  // Highlight the correct filter chip
  FOR EACH filter chip:
    IF the chip's service name matches the activated one:
      SET background to primary color.
      SET text to white.
    ELSE:
      SET background to transparent.
      SET text to semi-transparent white.

  // Update the center icon
  SET the text content of the center icon to the icon name from SERVICE_MAP for the activated service.

  // Highlight the correct technology nodes
  FOR EACH technology node:
    IF the node's technology name is in the list for the activated service in SERVICE_MAP:
      ADD "neon-glow" and other active styles.
    ELSE:
      REMOVE active styles and add muted styles.

// Event Listeners
FOR EACH orbital item:
  ADD a "click" event listener that calls activateService with its service name.

FOR EACH filter chip:
  ADD a "click" event listener that calls activateService with its service name.
```
