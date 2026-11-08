# Project Version History & Developer Changelog

This document tracks the technical evolution, structural updates, and version changelog for the **Zankhana International E-Journal** (formerly Booknest) academic publishing platform.

### Versioning Convention
Versions follow the format: **`1.MM.DD`** where:
- `1`: Major project release generation.
- `MM`: Two-digit month.
- `DD`: Two-digit day of the update.

---

## 📌 Executive Developer Guide

### Core System Stack
- **Framework:** Laravel 11 / 13 on PHP 8.2+
- **Styling:** Tailwind CSS (UGC-inspired academic theme with custom colors: `ugcOrange: #f37021`, `ugcDark: #d95a15`)
- **Database:** SQLite (`database/database.sqlite`) / MySQL compatible
- **Routing:** Web routes defined in `routes/web.php`
- **Controllers:** `App\Http\Controllers\Web\DashboardController` & `BookController`

### Key Entities & Journal Metadata
- **Journal Name:** Zankhana International E-Journal
- **ISSN:** 2350-0271
- **Publisher:** Madhav Publication, "Manas", Panch Pada, Shivaji Nagar, Botad, Gujarat, India
- **Official Email:** `zankhanaejournal@gmail.com`
- **Publication Frequency:** Monthly (12 issues per year, released online)
- **Review Model:** Double-Blind Peer Review
- **Supported Languages:** English, Hindi (हिन्दी), Gujarati (ગુજરાતી), Sanskrit (संस्कृतम्)

---

## 📅 Version Changelog

---

### [Version 1.11.08] (Documentation Directory Reorganization & Editorial Board Table with Live Filter)

#### 🎯 Highlights:
1. **Documentation Path Relocation to Public Assets:**
   - **Where:** Relocated `private/md/` to `public/md/`
   - **What:** Moved all project documentation markdown files (`version.md`, `what_i_want.md`) to [`public/md/`]. Updated local memory and project documentation pointers to track [`public/md/version.md`].

2. **Editorial Board Table Layout Transformation:**
   - **Where:** `resources/views/web/board.blade.php` & `resources/views/web/partials/board-member-table.blade.php`
   - **What:** Replaced the card grid view with a clean academic table format across all committee tabs (`editorial`, `overseas`, `advisory`, `review`, and `other`). Columns feature:
     - `Sr.No.`: Formatted sequence number (`01`, `02`, etc.)
     - `Name of member`: Scholar's full name in bold, accompanied by designation and institutional affiliation
     - `View`: Direct action button with eye icon opening the interactive modal dialog containing full scholar credentials and profiles (university, subject expertise, email, address, Google Scholar, ResearchGate, Scopus ID, ORCID/Vidwan).

3. **Real-Time Live Filter by Name, Designation, and Institution:**
   - **Where:** `resources/views/web/board.blade.php` & `resources/views/web/partials/board-member-table.blade.php`
   - **What:**
     - Added an instant client-side search input filter with search icon, clear button (`x`), and dynamic member match counter (`Found X of Y members`).
     - Added search data attributes (`data-name`, `data-designation`, `data-institution`, and combined `data-search`) across table rows and leadership cards.
     - Real-time filtering updates as user types without page reloads, works across all active committee tabs, and displays an empty state placeholder ("No members matching your filter") when no results match.


---

### [Version 1.11.07] (Editorial Board Dynamic Data & Interactive Modal)

#### 🎯 Highlights of What Was Done:
1. **Database-Driven Editorial Board:**
   - **Where:** `database/seeders/TblEditorialBoardSeeder.php`, `app/Models/EditorialBoard.php`, & `app/Http/Controllers/Web/DashboardController.php`
   - **What:** Re-synchronized and seeded all 20 editorial board records from `TblEditorialBoardSeeder.php` into `tbl_editorial_board` with updated `board_type` categories (`editorial`, `overseas`, `advisory`, `review`, `other`). Created Eloquent model `EditorialBoard` and updated `DashboardController@board` to fetch active records and group them by committee type.

2. **Editorial Board Clean UI Restoration (`web/board.blade.php`):**
   - **Where:** `resources/views/web/board.blade.php` & `resources/views/web/partials/board-member-card.blade.php`
   - **What:**
     - Restored the clean, classic typography and tab UI from the original design.
     - Streamlined outside card view to strictly show only **Name**, **Designation**, and **Institution** alongside the watermark index number.
     - Kept full details (university, subject expertise, email, address, Google Scholar, ResearchGate, Scopus, ORCID/Vidwan) inside the interactive click-to-open modal dialog.

3. **Interactive Full-Details Modal Dialog:**
   - **Where:** `resources/views/web/board.blade.php`
   - **What:**
     - Added an interactive modal dialog that opens instantly when clicking any member card.
     - Displays comprehensive scholar credentials: designation, committee badge, institution, university, subject expertise/methodology, clickable email link (`mailto:`), official mailing address, and scholarly links (Google Scholar, ResearchGate, Scopus ID, ORCID, Vidwan).
     - Supports closing via button, backdrop click, and `ESC` key, with body scroll locking.

---

### [Version 1.11.01]

#### 🎯 Highlights of What Was Done:
1. **Complete Admin Panel Migration to Metronic Theme (Demo 6):**
   - **Where:** `resources/views/layouts/panel.blade.php` and `resources/views/layouts/panel/*`
   - **What:** Replaced the legacy Phoenix admin theme with the **Metronic v9.4.6 Demo 6** Tailwind CSS architecture:
     - Configured Inter font typography and theme mode detection (light, dark, system).
     - Linked Metronic asset bundles (`dist/assets/css/styles.css`, `vendors/keenicons/styles.bundle.css`, `vendors/apexcharts/apexcharts.css`, `js/core.bundle.js`, `vendors/ktui/ktui.min.js`, `js/widgets/general.js`).
     - Rebuilt mobile header (`header.blade.php`) with offcanvas drawer toggle (`data-kt-drawer-toggle="#sidebar"`).
     - Built comprehensive fixed Metronic sidebar (`sidebar.blade.php`) featuring Zankhana International E-Journal branding crest, collapsible accordion navigation, live website link, and user card with quick sign-out.
     - Built Metronic panel footer (`footer.blade.php`) with Madhav Publication attribution, quick support links, and version badge.

2. **Creation of Reusable Metronic Blade UI Components (`<x-ui.*>`):**
   - **Where:** `resources/views/components/ui/`
   - **What:** Built a clean, extensible component suite for the entire application:
     - `card.blade.php` (`<x-ui.card>`): Standard Metronic card with title, description, custom header, toolbar, and footer slots.
     - `stat-card.blade.php` (`<x-ui.stat-card>`): Metric KPI widget with KeenIcon badges, dynamic color palettes (primary, success, danger, warning, info), values, and sub-labels.
     - `badge.blade.php` (`<x-ui.badge>`): Metronic badges with multiple variants (`primary`, `success`, `destructive`, `warning`, `info`, `secondary`), sizing, and outline states.
     - `button.blade.php` (`<x-ui.button>`): Buttons with auto-detection for links (`<a>`) or action triggers (`<button>`), variants, sizes, and KeenIcons.
     - `input.blade.php` (`<x-ui.input>`): Metronic form input container (`kt-input`) with label, inner KeenIcon, validation error handling, and help text.
     - `select.blade.php` (`<x-ui.select>`): Standardized select input with label and feedback styling.
     - `switch.blade.php` (`<x-ui.switch>`): Metronic toggle switch (`kt-switch`) for Boolean fields.
     - `page-header.blade.php` (`<x-ui.page-header>`): Standardized page toolbar with title, description, breadcrumb trail, and action button slot.

3. **Dashboard Page Redesign:**
   - **Where:** `resources/views/panel/dashboard.blade.php`
   - **What:** Rebuilt with Metronic stat cards, journal metadata cards (ISSN: 2350-0271, monthly publication, peer-review model), quick action launchers (Add Book, Manage Books, View Live Website).

4. **Books & Manuscripts Management Overhaul:**
   - **Where:** `resources/views/panel/books/index.blade.php`
   - **What:**
     - Quick filter statistics pills (All, Published, Drafts).
     - Live client-side instant search filter powered by KeenIcon magnifier.
     - Metronic data table (`kt-table`) with interactive status switches (`kt-switch`), formatted category badges, download counts, and action buttons (View, Edit, Delete).
     - Asynchronous AJAX status switcher communicating with `/panel/books/{id}/status/{status}` with immediate UI counter updates.

5. **Manuscript Create & Edit Form Upgrades:**
   - **Where:** `resources/views/panel/books/create.blade.php` & `resources/views/panel/books/edit.blade.php`
   - **What:**
     - Transformed forms into clean Metronic cards with responsive multi-column layouts.
     - Drag-and-drop styled PDF upload zone with client-side file inspection and interactive PDF viewer iframe preview.
     - Clean AJAX form submissions with validation feedback error badges.

6. **Manuscript Inspection Page (`show.blade.php`):**
   - **Where:** `resources/views/panel/books/show.blade.php`
   - **What:** 2-column layout displaying manuscript metadata, category badge, download stats, uploader IP, live status toggle, and full-height PDF reader embed with direct download options.

7. **Custom Metronic Laravel Pagination Component:**
   - **Where:** `resources/views/vendor/pagination.blade.php`
   - **What:** Replaced Bootstrap pagination classes with Metronic icon buttons (`kt-btn kt-btn-icon kt-btn-ghost kt-btn-sm`) and active states.

8. **Login Page Alignment with Metronic Classic Sign-In:**
   - **Where:** `resources/views/panel/auth/signin.blade.php` & `resources/views/layouts/auth.blade.php`
   - **What:** Replaced the legacy bespoke authentication layout with the exact **Metronic Demo 6 Classic Sign-In** layout (`private/metronic/demo6/authentication/classic/sign-in.html`):
     - Updated `layouts/auth.blade.php` to use Metronic core stylesheets and scripts (`styles.css`, `keenicons`, `ktui.min.js`, `core.bundle.js`) with theme-mode detection.
     - Metronic card layout (`kt-card max-w-[390px]`, `kt-card-content`).
     - Metronic form elements (`kt-input`, `kt-form-label`, `kt-checkbox`, `kt-btn kt-btn-primary`).
     - Password visibility toggle using Metronic `data-kt-toggle-password="true"` with KeenIcons (`ki-eye` / `ki-eye-slash`) and client fallback.
     - Preserved Zankhana branding, session flash error alerts, form validation feedback, and journal home return link.

---

### [Version 1.10.31]

#### 🎯 Highlights of What Was Done Today:
1. **Full Requirements Ingestion & Project Specification:**
   - **Where:** `public/md/what_i_want.md`
   - **What:** Ingested and synthesized all 12 raw source policy and guideline text files from `private/text/`. Produced a complete 360-degree project specification covering public portal architecture, author/reviewer/editor workflows, database requirements, and academic indexing standards.

2. **Controller & Route Expansion for Static Pages:**
   - **Where:** `routes/web.php` & `app/Http/Controllers/Web/DashboardController.php`
   - **What:** Registered routes and controller action methods:
     - Route `GET /about-us` -> `DashboardController@aboutUs`
     - Route `GET /privacy/{page}` -> `DashboardController@privacy` (`publication-ethics`, `plagiarism-policy`, `copyright-policy`)
     - Route `GET /guidelines/{page}` -> `DashboardController@guidelines` (`author-guidelines`, `manuscript-template-part-a`, `manuscript-template-part-b`)
   - **Navbar Navigation:** Updated `resources/views/layouts/web/navbar.blade.php` with dropdown menus linking cleanly to `/about-us`, `/privacy/*`, and `/guidelines/*`.

3. **Complete Implementation of About Us Page:**
   - **Where:** `resources/views/web/aboutUs.blade.php`
   - **What:** Replaced the empty starter blade template with a comprehensive, authoritative page integrating all information from `private/text/About Zankhana International E-Journal.txt`:
     - Quick metadata cards (ISSN: 2350-0271, Monthly Frequency, Peer-Reviewed, Open Access).
     - Official Vision & Mission statements.
     - 7 Core Commitments (Original Research, Interdisciplinary Collaboration, Dissemination, Diverse Formats, Multilingual, Ethics, Social Progress).
     - Multidisciplinary Scope with 20+ academic discipline tags.
     - 4 Languages of Publication cards (English, Hindi, Gujarati, Sanskrit).
     - 9 Accepted Manuscript contribution categories (Empirical, Theoretical, Reviews, Case Studies, Conceptual, Book Reviews, etc.).

4. **Publication & Frequency Page Update (`FREQUENCY OF PUBLICATION.txt`):**
   - **Where:** `resources/views/web/publication.blade.php`
   - **What:** Added the official Frequency of Publication section with the 12 issues/year monthly schedule, peer review requirement statement, and structured metric badges alongside existing editorial and production contact profiles.

5. **Contact Page Modernization (`CONTECT US.txt`):**
   - **Where:** `resources/views/web/contact.blade.php`
   - **What:**
     - Added official Publisher card for **Madhav Publication** with complete postal address in Botad, Gujarat and official email `zankhanaejournal@gmail.com`.
     - Preserved Chief Editor Dr. Prashant K. Chauhan's office contact.
     - Replaced outdated placeholder text with an academic query form (manuscript submission, peer review status, publication/certificates, copyright).
     - Enhanced AJAX form submission with CSRF token support (`X-CSRF-TOKEN`) communicating with `DashboardController@contactSubmit`.

6. **Implementation of All Policy Pages (`privacy/*`):**
   - **Where:**
     - `resources/views/web/privacy/publication-ethics.blade.php`
     - `resources/views/web/privacy/plagiarism-policy.blade.php`
     - `resources/views/web/privacy/copyright-policy.blade.php`
   - **What:**
     - `publication-ethics.blade.php`: Ingested `PUBLICATION ETHICS.txt` (Research integrity, originality, plagiarism prevention, authorship standards, conflict of interest disclosure, peer reviewer ethics, corrections & retractions, complaints & appeals, ethical commitment).
     - `plagiarism-policy.blade.php`: Ingested `Plagiarism Policy.txt` (Zero tolerance, screening tools & contextual evaluation, unacceptable misconduct, disciplinary penalties, author confirmation).
     - `copyright-policy.blade.php`: Ingested `COPYRIGHT POLICY.txt` (All 9 points: copyright retained by author, open access policy, author rights for teaching/research, publication rights, third-party copyrighted materials permissions, originality, previously published submissions, complaints mechanism, website branding copyright, and policy review).

7. **Implementation of All Guidelines Pages (`guidelines/*`):**
   - **Where:**
     - `resources/views/web/guidelines/author-guidelines.blade.php`
     - `resources/views/web/guidelines/manuscript-template-part-a.blade.php`
     - `resources/views/web/guidelines/manuscript-template-part-b.blade.php`
   - **What:**
     - `author-guidelines.blade.php`: Ingested `AUTHOR GUIDELINES.txt` with scope, originality, preparation, font specs, authorship, review, references (APA 7), and AI disclosures.
     - `manuscript-template-part-a.blade.php`: Com  plete title page template with author identification fields, double-blind review notices, and 9-point signed declaration checklist.
     - `manuscript-template-part-b.blade.php`: Complete anonymized research paper template (Abstract, Keywords, Intro, Methodology, Results, Discussion, and APA 7 Reference examples).

8. **PDF Download & View Button Integration Across All Policies and Guidelines:**
   - **Where:** Both `privacy/*` and `guidelines/*` views.
   - **What:** Added direct download and browser-viewing buttons connecting to authenticated files:
     - `public/uploads/web/guidelines/author-guidelines.pdf`
     - `public/uploads/web/guidelines/manuscript-template-part-a.pdf`
     - `public/uploads/web/guidelines/manuscript-template-part-b.pdf`
     - `public/uploads/web/policy/publication-ethics.pdf`
     - `public/uploads/web/policy/plagiarism-policy.pdf`
     - `public/uploads/web/policy/copyright-policy.pdf`

9. **Navbar Responsiveness & Title Wrapping Fix:**
   - **Where:** `resources/views/layouts/web/navbar.blade.php` & `resources/views/web/aboutUs.blade.php`
   - **What:** Added `whitespace-nowrap`, `shrink-0`, and responsive padding to prevent navigation links (`ABOUT US`, `CONTACT US`) from wrapping onto two lines on constrained desktop screens; wrapped `E-Journal` to eliminate ugly word-breaking.

10. **Login Page UI/UX Redesign:**
    - **Where:** `resources/views/panel/auth/signin.blade.php` & `resources/views/layouts/auth.blade.php`
    - **What:** Replaced the generic unbranded template with an authoritative academic portal design:
      - Zankhana branding crest, ISSN 2350-0271, and peer-reviewed badge.
      - Ambient orange radial glows with a dark glassmorphic card container.
      - Sleek inputs with inner left SVG icons and UGC orange focus rings.
      - Interactive password show/hide visibility toggle.
      - Styled authentication failure alerts and return-to-home navigation.

11. **Documentation & Version System Establishment:**
    - **Where:** `public/md/version.md`
    - **What:** Initialized this file to document all today's work, past project reconstruction, and developer guidance for future maintainers.

---

### [Version 1.10.25]

#### 🎯 Highlights:
- **Where:** `private/assets/All Policies/` & `private/assets/GUIDELINES/`
- **What:** Asset ingestion and standardization of official journal governance documents:
  - Added `1. PUBLICATION ETHICS.pdf`
  - Added `2. Plagiarism Policy.pdf`
  - Added `AUTHOR GUIDELINES.pdf`
  - Added `MANUSCRIPT TEMPLATE Part  A.pdf` (Title page & declarations)
  - Added `MANUSCRIPT TEMPLATE Part  B.pdf` (Anonymized main paper)

---

### [Version 1.10.11]

#### 🎯 Highlights:
- **Where:** `resources/views/web/home.blade.php`
- **What:** Home Page Content Update (`home.txt`):
  - Updated the main welcome hero section to reflect the official multi-paragraph text from `private/text/home.txt`.
  - Clarified the multidisciplinary scope, peer-reviewed nature, online monthly release cycle, and academic mission for researchers and students across India and globally.

---

### [Version 1.10.03]

#### 🎯 Highlights:
- **Where:** `resources/views/layouts/web/header.blade.php`, `resources/views/layouts/web.blade.php`
- **What:** Visual redesign and layout refactoring:
  - Integrated UGC-inspired orange color theme (`#f37021`) across top headers, active navigation pills, and button accents.
  - Added dynamic announcement marquee banner in the layout header.
  - Refactored package discovery and bootstrap service caching.

---

### [Version 1.06.27]

#### 🎯 Highlights:
- **Where:** `public/assets/img/favicons/`, `public/assets/img/icons/`, `resources/views/layouts/panel/`
- **What:** Branding and Admin Panel UI Polish:
  - Generated and uploaded full favicon suite (`apple-touch-icon.png`, `favicon-16x16.png`, `favicon-32x32.png`, `favicon.ico`).
  - Added official white and standard journal logos in `public/assets/img/icons/`.
  - Refined admin dashboard navigation (`layouts/panel/navbar.blade.php`) and footer (`layouts/panel/footer.blade.php`).
  - Updated frontend package dependencies via `package-lock.json`.

---

### [Version 1.06.07] (Project Inception & Core Scaffolding)

#### 🎯 Highlights:
- **Where:** Database migrations, seeders, controllers, models, and initial views.
- **What:** Initial Laravel application setup:
  - **Database Migrations:**
    - `0001_01_01_000000_create_tbl_users_table.php`
    - `0001_01_01_000001_create_tbl_cache_table.php`
    - `0001_01_01_000002_create_tbl_jobs_table.php`
    - `2026_05_13_100940_create_tbl_contact_messages.php`
  - **Models & Seeders:** Created `Book` model and seeded sample research volumes/books via `TblBooksSeeder.php`.
  - **Controllers:** Created `DashboardController` and `BookController`.
  - **Public Views:** Scaffolded `home.blade.php`, `board.blade.php`, `books.blade.php`, `details.blade.php`, `contact.blade.php`, and `publication.blade.php`.
  - **Admin Panel:** Scaffolded administrative panel layout and authentication infrastructure under `layouts/panel/`.

---

## 🗺️ Project Directory Map for Developers

```
booknest/
├── app/
│   ├── Http/
│   │   ├── Controllers/
│   │   │   ├── Panel/
│   │   │   │   ├── AuthController.php            # Handles admin login, session verification, and logout
│   │   │   │   ├── BookController.php            # Admin CRUD for publications/manuscripts (upload PDF, edit, toggle active)
│   │   │   │   └── DashboardController.php       # Admin dashboard KPI metrics, article summary, and stats
│   │   │   └── Web/
│   │   │       ├── DashboardController.php       # Public static pages (home, board, aboutUs, privacy, guidelines, contact)
│   │   │       └── BookController.php            # Public publication/manuscript listing, search, and detail viewer
│   │   └── Middleware/
│   │       ├── ApiMiddleware.php                 # API request validation middleware
│   │       ├── NoCacheMiddleware.php             # Prevents back-button browser caching on protected pages
│   │       ├── PanelMiddleware.php               # Admin authentication and session guard
│   │       └── WebMiddleware.php                 # Web group core middleware
│   └── Models/
│       ├── Book.php                              # Publication/Article model (title, author, category, pdf, sell_count, is_active)
│       ├── EditorialBoard.php                    # Editorial board member model (name, designation, institution, board_type, profiles)
│       └── User.php                              # Administrative user model
├── bootstrap/
│   └── app.php                                   # Application configuration, routing setup (web, panel, console), and middleware aliases
├── database/
│   ├── migrations/                               # Database migrations:
│   │   ├── 0001_01_01_000000_create_tbl_users_table.php
│   │   ├── 0001_01_01_000001_create_tbl_cache_table.php
│   │   ├── 0001_01_01_000002_create_tbl_jobs_table.php
│   │   ├── 2026_05_13_100755_create_tbl_books_table.php
│   │   ├── 2026_05_13_100940_create_tbl_contact_messages_table.php
│   │   ├── 2026_06_07_155254_add_user_fields_to_tbl_users_table.php
│   │   └── 2026_11_07_183626_create_tbl_editorial_board_table.php
│   └── seeders/                                  # Seeders:
│       ├── DatabaseSeeder.php                    # Master seeder caller
│       ├── TblBooksSeeder.php                    # Seeds research books and publications
│       ├── TblEditorialBoardSeeder.php           # Seeds 20+ editorial board scholars across 5 committee types
│       └── TblUserSeeder.php                     # Seeds default administrative user
├── private/
│   ├── assets/                                   # Official PDF & DOCX source files
│   └── text/                                     # Raw text extracts of journal policies, editorial board, and templates
├── public/
│   ├── assets/                                   # Public UI assets:
│   │   ├── css/                                  # Public stylesheets
│   │   ├── js/                                   # Public JavaScript helpers
│   │   └── img/                                  # Logos, icons, and favicon suite
│   ├── dist/                                     # Metronic production asset bundle:
│   │   └── assets/
│   │       ├── css/styles.css                    # Compiled Metronic Tailwind CSS
│   │       ├── js/core.bundle.js                 # Metronic core framework bundle
│   │       └── vendors/                          # KeenIcons, KTUI, ApexCharts libraries
│   ├── md/                                       # Project documentation:
│   │   ├── what_i_want.md                        # Complete project blueprint & functional specification
│   │   └── version.md                            # This changelog & developer roadmap
│   └── uploads/
│       ├── pdfs/                                 # Uploaded research publication/manuscript PDF files
│       └── web/
│           ├── guidelines/                       # Official downloadable guidelines & template PDFs
│           │   ├── author-guidelines.pdf
│           │   ├── manuscript-template-part-a.pdf
│           │   └── manuscript-template-part-b.pdf
│           └── policy/                           # Official downloadable policy PDFs
│               ├── publication-ethics.pdf
│               ├── plagiarism-policy.pdf
│               └── copyright-policy.pdf
├── resources/
│   └── views/
│       ├── components/                           # Reusable Blade UI components:
│       │   └── ui/                               # Metronic UI component suite:
│       │       ├── badge.blade.php               # <x-ui.badge> (status pills & labels)
│       │       ├── button.blade.php              # <x-ui.button> (action buttons & links)
│       │       ├── card.blade.php                # <x-ui.card> (standard Metronic container)
│       │       ├── input.blade.php               # <x-ui.input> (form inputs with icon & validation)
│       │       ├── page-header.blade.php         # <x-ui.page-header> (toolbar, title & breadcrumbs)
│       │       ├── select.blade.php              # <x-ui.select> (dropdown form control)
│       │       ├── stat-card.blade.php           # <x-ui.stat-card> (KPI metric counters with KeenIcon)
│       │       └── switch.blade.php              # <x-ui.switch> (toggle switches)
│       ├── layouts/                              # Master site and panel layouts:
│       │   ├── auth.blade.php                    # Minimal authentication layout for sign-in
│       │   ├── panel.blade.php                   # Master Metronic v9.4.6 Demo 6 admin panel layout
│       │   ├── web.blade.php                     # Master UGC-inspired public website layout
│       │   ├── panel/                            # Admin panel partials:
│       │   │   ├── customizer.blade.php          # Metronic theme customizer drawer
│       │   │   ├── footer.blade.php              # Admin footer with publisher attribution
│       │   │   ├── head.blade.php                # Admin head (Inter font, CSS & KeenIcons)
│       │   │   ├── header.blade.php              # Admin top header bar & mobile drawer trigger
│       │   │   ├── navbar.blade.php              # Admin top secondary navbar
│       │   │   └── sidebar.blade.php             # Metronic fixed sidebar with collapsible nav & user card
│       │   └── web/                              # Public website layout partials:
│       │       ├── footer.blade.php              # Global footer with links & indexing badges
│       │       ├── head.blade.php                # Meta tags, SEO & Tailwind CDN setup
│       │       ├── header.blade.php              # UGC-orange header banner with announcement marquee
│       │       └── navbar.blade.php              # Top responsive navigation bar & dropdowns
│       ├── panel/                                # Admin panel views:
│       │   ├── dashboard.blade.php               # Admin overview with KPI cards, charts & quick actions
│       │   ├── auth/
│       │   │   └── signin.blade.php              # Metronic classic sign-in page
│       │   └── books/                            # Publication management CRUD views:
│       │       ├── create.blade.php              # Add new manuscript/book with PDF upload
│       │       ├── edit.blade.php                # Edit manuscript metadata & file
│       │       ├── index.blade.php               # Publications datatable with status toggles
│       │       └── show.blade.php                # Publication detailed preview
│       └── web/                                  # Public website views:
│           ├── aboutUs.blade.php                 # Journal profile, aims, multidisciplinary scope & indexing
│           ├── board.blade.php                   # Editorial Board with tabs, real-time filter & details modal
│           ├── books.blade.php                   # Published articles & research paper archive
│           ├── contact.blade.php                 # Publisher & editorial office contacts + inquiry form
│           ├── details.blade.php                 # Single article viewer with PDF viewer & citation metadata
│           ├── home.blade.php                    # Homepage with welcome hero, stats, and latest papers
│           ├── publication.blade.php             # Publication frequency, peer review policy & ethics
│           ├── guidelines/                       # Author submission guidelines & templates:
│           │   ├── author-guidelines.blade.php
│           │   ├── manuscript-template-part-a.blade.php
│           │   └── manuscript-template-part-b.blade.php
│           ├── partials/                         # Reusable public page partials:
│           │   ├── board-member-card.blade.php   # Editorial board member card view
│           │   └── board-member-table.blade.php  # Academic table view with filter data attributes
│           └── privacy/                          # Official journal policy pages:
│               ├── copyright-policy.blade.php
│               ├── plagiarism-policy.blade.php
│               └── publication-ethics.blade.php
└── routes/
    ├── console.php                               # Artisan scheduled tasks and console commands
    ├── panel.php                                 # Authenticated admin panel routes (dashboard, books, auth)
    └── web.php                                   # Public journal routes (home, board, publications, policies)
```

---

## 🚀 Recommended Next Steps for Future Developers

1. **Manuscript Submission Portal:** Build author manuscript submission forms for uploading Part A (Title page with author metadata) and Part B (Anonymized manuscript for double-blind review).
2. **Peer Review Process Page:** Create a dedicated route and view for `/peer-review-process` (from `PEER REVIEW PROCESS.txt`).
3. **Volume & Monthly Issue Management:** Implement archive filtering by Volume and Issue number (Issues 1 to 12).
