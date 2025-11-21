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

📸 **Screenshot:**
<img width="1291" height="804" alt="image" src="https://github.com/user-attachments/assets/1b78d608-4f71-4201-82db-e903c89d9232" />

---

# 📁 Portfolio Projects

Below are summaries for each block.

---

# 🟦 Block 1 – Basic Dynamic Website (Avengers)

📌 **Displays structured data from linked database tables using API functions, SQL joins, and dynamic rendering in the View layer.**

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


📸 Screenshot:

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


📸 Screenshot:

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

# 🍣 Block 2 – Selling Site

📌 **A dynamic ecommerce sushi shop with user login, admin dashboard, cart system, and CRUD management.**

---

## 🧠 Project Concept

This project simulates an online sushi store with:

* User login & registration
* Admin role with full CRUD functionality
* Cookie-based shopping cart
* Checkout & payment simulation
* MVC structure (Model, View, Controller)
* Parameterized SQL for injection prevention

All display and business logic is separated cleanly into MVC folders following best practices.

---

### 📄 Pages in Block 2

---

### 1️⃣ Main Page – Sushi Menu

The landing page displays all sushi items:

* Name  
* Price  
* First 100 characters of description (`…`)  
* Product image  
* **Buy** button

Users can:

✔ Add multiple items  
✔ Choose quantities  
✔ Store their cart in cookies


📸 Screenshot:

<img width="894" height="906" alt="image" src="https://github.com/user-attachments/assets/a21169b0-8405-4985-9b71-65976fedfc13" />

---

### 🔐 User Registration & Login

Both forms open as **popup modal windows**, not separate pages.

#### Registration Validation Includes:

* Matching password confirmation  
* Strong password rules  
* Username must be unique  
* Friendly success or failure messages

#### Header Behavior

| User Type     | Header Display                                                 |
| ------------- | -------------------------------------------------------------- |
| Guest         | Login + Register buttons                                       |
| Logged User   | `Hello, <username>`                                           |
| Admin         | `Hello, <username>` + `Dashboard` button                 |



📸 Screenshot:

<img width="909" height="534" alt="image" src="https://github.com/user-attachments/assets/5587daee-ea50-4a4c-9a00-76574d8c483f" />

📸 Screenshot:

<img width="397" height="234" alt="image" src="https://github.com/user-attachments/assets/16366c15-1a5e-4337-91a7-200323dffe5a" />

📸 Screenshot:

<img width="898" height="50" alt="image" src="https://github.com/user-attachments/assets/823d48e0-c9bd-4883-a951-3869423c8b10" />

---

### 🛒 Cart Page

The cart pulls stored items directly from cookies and displays:

* Product image  
* Name  
* Quantity  
* Price per item  
* Line total  
* Order total

Users can:

✔ Increase quantities  
✔ Decrease quantities  
✔ Remove individual items  
✔ Empty the entire cart

If no items exist:

> “Your cart is empty.”

#### Checkout Rule:

* Logged-in user → `Pay` button displayed  
* Guest user → Shown message requiring login before payment

📸 Screenshot:

<img width="905" height="575" alt="image" src="https://github.com/user-attachments/assets/2e701f45-4264-4c9a-aa1e-a79f1000a5f2" />

---

### 💳 Payment Page

Shows the final list of items and pricing based on cookie data.

#### Payment Workflow

1. User enters card details  
2. Input validation  
3. Loading animation (e.g. spinning circle)  
4. Server responds with one of two outcomes:

#### ✔ Success
* Payment accepted  
* Cookies cleared  
* User returned to main page with success message

#### ❌ Failure
* Declined message displayed  
* User may retry without losing cart contents

📸 Screenshot:

<img width="892" height="536" alt="image" src="https://github.com/user-attachments/assets/d7b31b87-3055-42ab-8e86-61dad6700fd9" />

---

### 🛠 Admin Dashboard

Only users with admin accounts can access this page.  
If a non-admin attempts access:

> Redirect to main page with “Access Denied.”

#### Admin Functions

✔ Add sushi  
✔ Edit sushi  
✔ Delete sushi  
✔ View full product list

Add/Edit are performed via **popup modal forms** and include:

* Validation
* Optional image upload
* Immediate results visible in the store front end


📸 Screenshot:

<img width="899" height="577" alt="image" src="https://github.com/user-attachments/assets/7d21bac6-41b3-484a-ab91-7083c6ce2da8" />

---

## 💡 Technologies Used in Block 2

* PHP  
* MySQL  
* MVC Architecture  
* HTML / CSS  
* Bootstrap  
* JavaScript  
* Cookies for persistent cart  
* SQL prepared statements  
* Authentication + user roles

---

# 🟩 Block 3 – IoT Monitoring & Control System

📌 **A web interface connected to a physical IoT device, supporting real-time monitoring and remote LED control.**

📸 Screenshot:

<img width="909" height="911" alt="image" src="https://github.com/user-attachments/assets/9bc95393-1457-4f3d-bd9b-4607334e91d1" />

---

## 🧠 Project Concept

This project demonstrates integration between a PHP web application and a physical IoT device.  
The device:

* Sends temperature readings (internal & external) every **5 minutes**
* Stores data in a MySQL database
* Receives remote web commands to control LEDs

The web interface displays all data in a **single page separated into functional panels**.

---

## 📄 Panels in Block 3

---

### 1️⃣ LED Control Panel

Allows users to remotely toggle:

* **Green LED**
* **Red LED**

Each LED has two buttons:

* **ON**
* **OFF**

When a request is successfully sent to the device:

✔ Device responds  
✔ Button changes state (example: ON button turns into OFF)  
✔ Status updated visually

📸 Screenshot:

<img width="445" height="188" alt="image" src="https://github.com/user-attachments/assets/08130b6f-e09e-462f-951e-b1937149844b" />

---

### 2️⃣ Live Temperature Panel

Displays:

* **Current internal temperature**
* **Current external temperature**

Values are pulled directly from the latest device readings.

📸 Screenshot:

<img width="447" height="130" alt="image" src="https://github.com/user-attachments/assets/70379be9-df38-4a00-b396-82b5aa470f9f" />

---

### 3️⃣ Historical Data Table

Shows the **last 10 recorded entries**, including:

| Data | Description |
| --- | --- |
| Internal Temperature | °C reading |
| External Temperature | °C reading |
| Green LED State | ON / OFF |
| Red LED State | ON / OFF |
| Timestamp | Date & time of recording |

### Data Collection

Every 5 minutes:

1. The server requests updated data from the IoT device  
2. Device sends back temperature values and LED statuses  
3. Data is stored into MySQL  
4. Table dynamically refreshes to show the newest values


📸 Screenshot:

<img width="908" height="485" alt="image" src="https://github.com/user-attachments/assets/bc791c23-cfa6-4a75-aa20-ce1009818363" />

---

### 4️⃣ Temperature Graph Panel

Displays:

* Internal temperature trend
* External temperature trend

Data is plotted as a visual graph to show temperature changes over time, using values stored in the database.

This allows users to:

✔ Monitor environmental changes  
✔ Compare temperature patterns  
✔ View history visually instead of only tables


📸 Screenshot:

<img width="885" height="306" alt="image" src="https://github.com/user-attachments/assets/b8405aee-c639-4946-b5e0-70af33241d5a" />

---

### 💡 Technologies Used in Block 3

* PHP
* MySQL
* Bootstrap
* JSON API
* JavaScript  
* AJAX/device requests  
* Real-time data polling  
* MVC architecture  
* Secure database operations

---

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
