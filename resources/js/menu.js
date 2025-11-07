"use strict";

function menu() {
  const navBtn = document.getElementById("nav-btn");
  const menuBtn = document.querySelectorAll(".menu-btn");
  const mobileNav = document.getElementById("mobile-nav");
  
  let isOpen = false;

  navBtn.addEventListener('click', () => {
    if (!isOpen) {
      mobileNav.classList.remove('animate-disappear');
      mobileNav.classList.add('animate-appear');
    } else {
      mobileNav.classList.remove('animate-appear');
      mobileNav.classList.add('animate-disappear');
    }
    isOpen = !isOpen
    
  });
};

document.addEventListener("DOMContentLoaded", () => {
  menu();
});
