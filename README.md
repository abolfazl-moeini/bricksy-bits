
# Bricksy Bits 🧩  
A lightweight add-on that brings essential missing features to Bricks Builder — crafted for performance, usability, and a better developer experience.

---

## ✅ Features

- [x] ~~Query Loop Index Condition~~  
  Adds a new **Condition option** called `Query Loop Index` inside Bricks Query Loop settings.  
  Users can select it directly from the dropdown and apply standard operators (`==`, `<`, `>`, etc.) along with a target number.  
  The index starts from **0** for a more logical developer experience (DX).

---

## 📌 Use Cases

- Show the first item with a unique layout:
  ```php
  Query Loop Index == 0
  ```

- Target multiple specific items:
  ```php
  Query Loop Index < 3
  ```

- Avoid multiple queries and build advanced layouts with just one loop.

---

## 💡 Why Bricksy Bits?

Bricks is powerful, but sometimes lacks the small utilities developers need.  
Bricksy Bits is built to **fill those gaps** with focused, no-bloat enhancements that improve both performance and workflow.

---

## 📦 Installation

1. Download or clone this repository.
2. Upload it via **Plugins > Add New > Upload Plugin** in your WordPress dashboard.
3. Activate the plugin.
4. `Query Loop Index` will now be available in the Conditions panel for query loops in Bricks.

---

## 🚧 Roadmap

Bricksy Bits will grow gradually, adding tiny but essential features to cover what Bricks is currently missing — one bit at a time.

---

### 🗣 Got a missing feature in Bricks?

If there's something small but useful that Bricks doesn't support yet,  
feel free to [open an issue](https://github.com/abolfazl-moeini/bricksy-bits/issues/new) and request it — we're here to patch the gaps 🛠️

---

**Made with ☕, 🔁, and clean queries.**
