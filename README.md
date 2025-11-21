# 🌐 My PHP Portfolio Website

A full dynamic **PHP portfolio website** showcasing multiple projects, built using **MVC architecture**, MySQL, Bootstrap, JavaScript, and secure coding practices.

---

## 🧰 Tech Stack & Features

**Languages & Frameworks:**
![PHP](https://img.shields.io/badge/PHP-777BB4?logo=php\&logoColor=white)
![MySQL](https://img.shields.io/badge/MySQL-005C84?logo=mysql\&logoColor=white)
![Bootstrap](https://img.shields.io/badge/Bootstrap-7952B3?logo=bootstrap\&logoColor=white)
![HTML](https://img.shields.io/badge/HTML-F06529?logo=html5\&logoColor=white)
![CSS](https://img.shields.io/badge/CSS-264de4?logo=css3\&logoColor=white)
![JavaScript](https://img.shields.io/badge/JavaScript-f0db4f?logo=javascript\&logoColor=black)

### ✔ Main Features

* Fully MVC structured:

  * **Model** – database & logic
  * **View** – pages, CSS, JS
  * **Controller** – routing & data passing
* Database-driven content from multiple tables
* Forms use **SQL injection prevention**
* **Errors hidden** in production mode
* Independent:

  * `header.php`
  * `footer.php`
  * database query files

---

## 🏁 Landing Page

The home page acts as a **hub** displaying four main sections:

| Block       | Description           |
| ----------- | --------------------- |
| **Block 1** | Basic Dynamic Website |
| **Block 2** | Selling Site          |
| **Block 3** | IoT Site              |
| **Block 4** | XML Elements          |

Each opens its own project with multiple pages, stored and loaded dynamically.
Local Setup: PHP websites require a local server (XAMPP, WAMP, MAMP, Docker) to run. Screenshots are provided to showcase the website functionality.

📸 **Screenshot:**
<img width="1291" height="804" alt="image" src="https://github.com/user-attachments/assets/1b78d608-4f71-4201-82db-e903c89d9232" />

---

# 📁 Portfolio Projects

Below are summaries for each block.

---

# 🟦 Block 1 – Basic Dynamic Website (Avengers)

📌 **A CRUD-style information system demonstrating MVC, multitable relationships, and dynamic data rendering.**

---

## 🧠 Project Concept

This project displays information about **12 Avengers**, each with:

* Name
* Description
* Portrait image
* Link to an individual profile page

All data is **fetched from two related tables**:

* `avenger`
* `image`

**Relationship:**
✔ One Avenger ➝ Many Images

Data is retrieved using **API functions**, returned as JSON, and then rendered in Bootstrap-based layouts.

---

## 📄 Pages in Block 1

### 1️⃣ Main Page – Avenger List

Displays:

* Name
* First 100 characters of description
* Thumbnail
* Link to personal page

📸 Screenshot:
<img width="1900" height="905" alt="image" src="https://github.com/user-attachments/assets/d9ab4010-7330-4224-8b95-00853b8673ed" />

Internally:

* `GetAllAvengers()` executes SQL
* Data converted to JSON
* Rendered in HTML/CSS/Bootstrap

---

### 2️⃣ Individual Avenger Profile

Shows:

* Full info
* All images
* Article listings
* External "More Info" link

Smart behavior:

✔ If no images exist → shows a friendly message
✔ If articles exist → they display as clickable links
✔ Supports characters having any number of images/articles

### Database Logic

* Articles and Avengers = **Many-to-Many**
* Solved using table:

  * `publication`

API functions used:

* `GetAvengerByID()`
* `GetAllImages()`
* `GetArticles()`

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/07e8815f-6f5e-41a0-883d-95f37e27d613" />

---

### 3️⃣ Article Page

Displays:

* Article title
* Body text
* Linked image
* Reporter name
* Article ID

Database relationships:

| Relationship        | Type                              |
| ------------------- | --------------------------------- |
| Reporter → Articles | One-to-Many                       |
| Article → Images    | One-to-Many                       |
| Avengers ↔ Articles | Many-to-Many (via junction table) |

<img width="1920" height="1080" alt="image" src="https://github.com/user-attachments/assets/28b2d228-ed89-42fb-8211-20790b0f6559" />

---

### 🧩 Navigation

* Each page has button navigation back to:

  * Avengers list
  * Portfolio main page

---

### 💡 Technologies Used in Block 1

* PHP
* MySQL
* Bootstrap
* JSON API
* MVC structure
* Prepared statements (SQL injection prevention)

---

# 🟥 Block 2 – Selling Site

.....

📌 **Description ()**

.......

### 📄 Pages Include

.....


# 🟩 Block 3 – IoT Site

📌 **Description ()**

.......

### 📄 Pages Include

.....


# 🟨 Block 4 – XML Elements

📌 **Description ()**

.......

### 📄 Pages Include

.....

---

# ⚙ Installation (Local Use)

```bash
git clone https://github.com/ilonaJefimova/Web_Portfolio.git
```

1. Move project to local server root

   * XAMPP → `htdocs`
   * WAMP → `www`
2. Import SQL database
3. Open:

```
http://localhost/Web_Portfolio/index.php
```

---

# 📎 Notes

* Screenshots are included because PHP cannot execute directly on GitHub Pages.
* All code follows:

  * MVC
  * Secure SQL practices
  * Production mode error suppression
* Each block is its own independent project with models, views, and controllers.

---

# 📜 License

This repository is for educational and personal portfolio use.
