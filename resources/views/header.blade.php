<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Food Lover</title>
    <!-- CSS -->
<style>
    @import url("https://fonts.googleapis.com/css2?family=Josefin+Sans:wght@300;400;500;600;700&display=swap");
/* Base */
:root {
  --clr-primary: #fe5722;
  --clr-secondary: #272d36;
}

*,
*::after,
*::before {
  box-sizing: border-box;
  padding: 0;
  margin: 0;
  font-family: "Josefin Sans", sans-serif;
}

html {
  scroll-behavior: smooth;
}

body {
  background: #fff;
  color: var(--clr-secondary);
  overflow-x: hidden;
}

.section {
  width: 100%;
  padding: 40px 0;
}

.flex {
  display: flex;
  align-items: center;
  justify-content: center;
}

.container {
  padding: 0 30px;
}

.primary {
  font-size: 64px;
  font-weight: 700;
  margin-bottom: 20px;
}

.secondary {
  font-size: 44px;
  font-weight: 700;
  margin-bottom: 20px;
}

.tertiary {
  font-size: 24px;
  font-weight: 400;
  margin-bottom: 20px;
}

.btn {
  padding: 14px 20px;
  background: var(--clr-primary);
  border-radius: 4px;
  color: #fff;
  text-decoration: none;
  font-size: 22px;
  display: inline-block;
  margin: 20px 0;
}

/* End Base */

/* Menu */
nav {
  height: 80px;
  width: 100%;
  position: fixed;
  top: 0;
  background: #fff5f2;
  box-shadow: 0 1px 1px -1px rgba(0, 0, 0, 0.22);
  z-index: 22;
}

label.logo {
  font-size: 35px;
  line-height: 80px;
  padding: 0 30px;
  font-weight: 700;
}

nav ul {
  float: right;
  margin-right: 20px;
}

nav ul li {
  display: inline-block;
  line-height: 80px;
  margin: 0 5px;
}

nav ul li a {
  font-size: 18px;
  padding: 7px 13px;
  text-decoration: none;
  color: var(--clr-secondary);
}

.menu a.active,
.menu a:hover {
  border-bottom: 2px solid var(--clr-primary);
  transition: 0.3s;
}

.checkbtn {
  font-size: 30px;
  color: #fff;
  float: right;
  line-height: 80px;
  margin-right: 40px;
  cursor: pointer;
  display: none;
}

#check {
  display: none;
}
/* End Menu */

/* Hero Section */
#hero-section {
  background: #fff5f2;
  margin-top: 60px;
}

.text,
.visual {
  width: 50%;
}

.text {
  margin: 0 20px;
}

.visual img {
  width: 80%;
  height: auto;
  display: block;
}

#hero-section .text {
  margin-left: 30px;
}

#hero-section .visual img {
  margin-left: auto;
}
/* End Hero Section */

/* How It Works */
#how-it-works {
  width: 80%;
  margin: 0 auto;
  text-align: center;
}

.box {
  border: 1px solid #b2b2b2;
  padding: 25px 5px;
  margin: 0 10px;
  border-radius: 8px;
  font-size: 18px;
  transition: 0.3s ease;
  cursor: pointer;
}

.box ion-icon {
  font-size: 35px;
  color: var(--clr-primary);
  margin: 15px 0;
}

.box.active,
.box:hover {
  color: #fff;
  border-color: var(--clr-primary);
  background: var(--clr-primary);
}

.box.active ion-icon,
.box:hover ion-icon {
  color: #fff;
}
/* End How It Works */

/* About */
#about .visual img,
#app .visual img {
  margin-right: auto;
}
/* End About */

/* Restaurant Menu */
.category {
  list-style: none;
  text-align: center;
  margin: 20px 0 40px 0;
}

.category li {
  display: inline-block;
  margin: 0 15px;
  font-size: 20px;
  font-weight: 500;
  cursor: pointer;
}

.category li.active {
  color: var(--clr-primary);
}

.restaurant-menu {
  display: grid;
  grid-template-columns: repeat(3, 1fr);
}

.menu-item {
  width: 260px;
  margin: 0 auto;
  border-radius: 6px;
  overflow: hidden;
}

.menu-item img {
  width: 100%;
}

.order {
  justify-content: space-between;
}

.btn-menu {
  padding: 6px 10px;
  font-size: 16px;
  text-align: center;
  background: #fff;
  border: 1px solid var(--clr-primary);
  color: var(--clr-primary);
}

.title {
  font-size: 18px;
  font-weight: 300;
  margin: 8px 0;
}

.location {
  font-size: 18px;
  font-weight: 500;
}
/* End Restaurant Menu */

/* Testimonial */
#testimonial .visual img {
  margin-left: auto;
}

.user {
  margin-top: 30px;
  justify-content: start;
}

.user img {
  width: 50px;
  border-radius: 50%;
  margin-right: 20px;
}
/* End Testimonial */

/* FAQ */
#faq .secondary {
  text-align: center;
}

.faq {
  width: 60%;
  margin: 50px auto 20px auto;
}

summary {
  padding: 1em;
  border: 1px solid #b2b2b2;
  margin-bottom: 1em;
  cursor: pointer;
  outline: none;
  border-radius: 0.3em;
  font-weight: 600;
}

details[open] summary ~ * {
  animation: open 1s ease-in-out;
}

@keyframes open {
  from {
    opacity: 1;
    margin-top: -10px;
  }

  top {
    opacity: 1;
    margin-top: 0;
  }
}
/* End FAQ */

/* App */
#app {
  text-align: center;
}

.app-store {
  background: #000;
  margin: 0 10px;
  padding: 4px 16px;
  border-radius: 12px;
  display: flex;
  align-items: center;
  justify-content: space-between;
  font-size: 12px;
  color: #fff;
  cursor: pointer;
}

.app-store p {
  margin-top: 8px;
}

.app-store span {
  font-size: 16px;
  line-height: 25px;
}

.app-store ion-icon {
  font-size: 30px;
  margin-right: 10px;
}

.download {
  margin: 30px 0;
}
/* End App */

/* Footer */
.footer {
  background: var(--clr-secondary);
  color: #b2b2b2;
  padding: 30px 0;
}

.footer .container {
  justify-content: space-between;
  align-items: flex-start;
}

.footer h2 {
  font-size: 22px;
  margin-bottom: 10px;
  color: #fff;
}

.footer ul {
  list-style: none;
  line-height: 30px;
  font-size: 16px;
}

.footer ul li {
  cursor: pointer;
}

.footer-about {
  width: 35%;
}

.copyright {
  text-align: center;
  padding: 20px 0;
  margin-top: 30px;
  border-top: 1px solid #b2b2b2;
}
/* End Footer */

/* Responsive  */
@media (max-width: 952px) {
  label.logo {
    font-size: 30px;
    padding-left: 20px;
  }

  nav ul li a {
    font-size: 16px;
  }
}

@media (max-width: 858px) {
  .checkbtn {
    display: block;
    color: var(--clr-primary);
  }

  ul {
    position: fixed;
    width: 100%;
    height: 100vh;
    top: 80px;
    left: -100%;
    top: 80px;
    transition: all 0.5s;
    text-align: center;
    background: #fff5f2;
  }

  nav ul li {
    display: block;
    margin: 50px 0;
    line-height: 30px;
  }

  nav ul li a {
    font-size: 20px;
  }

  .menu a:hover,
  .menu a.active {
    background: none;
    color: var(--clr-primary);
  }

  #check:checked ~ ul {
    left: 0;
  }

  #hero-section {
    margin-top: 80px;
  }

  #hero-section .text {
    margin-left: auto;
  }

  .flex {
    flex-direction: column;
  }

  .visual,
  .text {
    width: 70%;
    margin: 15px auto;
    text-align: center;
  }

  .download,
  .user {
    flex-direction: row;
  }

  .user {
    justify-content: center;
  }

  .visual img {
    margin: 0 auto;
  }

  .box {
    margin: 15px 0;
  }

  .restaurant-menu {
    grid-template-columns: repeat(2, 1fr);
    grid-gap: 20px;
  }

  .faq,
  .menu-item {
    width: 80%;
  }

  .primary {
    font-size: 56px;
  }

  .secondary {
    font-size: 40px;
  }

  .tertiary {
    font-size: 20px;
  }

  .footer-about {
    width: 100%;
    text-align: center;
  }

  .quick-links,
  .get-in-touch,
  .footer-category {
    display: none;
  }
}

@media (max-width: 680px) {
  .container {
    padding: 0 10px;
  }

  .text,
  .visual {
    width: 90%;
  }

  .restaurant-menu {
    grid-template-columns: 1fr;
  }

  .faq {
    width: 90%;
  }

  .app-store {
    margin: 10px 0;
  }

  .download {
    flex-direction: column;
  }

  .primary {
    font-size: 48px;
  }

  .secondary {
    font-size: 32px;
  }

  .tertiary {
    font-size: 17px;
  }
}
/* End Responsive  */





.youtube {
  position: fixed;
  bottom: 40px;
  right: 70px;
  text-decoration: none;
  padding: 8px 12px;
  background: rgba(0,0,0,0.6);
  border-radius: 6px;
  box-shadow: 0 2px 2px 3px rgba(0, 0, 0, 0.2);
  color: #fff;
}

.youtube p {
  font-size: 22px;
}

    </style>
    
</head>
