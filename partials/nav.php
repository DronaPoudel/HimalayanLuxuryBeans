<!DOCTYPE html>
<html lang="en">
  <head>
    <!-- Required meta tags always come first -->
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1, shrink-to-fit=no"
    />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <title>Himalayan Luxury Beans </title>
    <!-- Font Awesome -->
    <link
      rel="stylesheet"
      href="https://use.fontawesome.com/releases/v5.11.2/css/all.css"
    />
    <!-- FOnt -->
    <link href="https://fonts.googleapis.com/css2?family=Source+Sans+Pro:ital,wght@0,200;0,300;0,400;0,600;0,700;1,300;1,400;1,700&display=swap" rel="stylesheet">
    <!-- Bootstrap core CSS -->
    <link href="vendors/css/bootstrap.min.css" rel="stylesheet" />

    <!-- Material Design Bootstrap -->
    <link href="vendors/css/mdb.css" rel="stylesheet" />
    <link rel="stylesheet" href="vendors/css/animations-extended.min.css">
    <link rel="stylesheet" href="css/nav.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="vendors/css/accordin-extended.min.css">
    <!-- <link rel="stylesheet" href="../vendors/css/rating.min.css"> -->

  </head>
  <body>

<nav class="navbar shadow">
  <div class="container">
    <div class="navbar-header">
      <a href="cart.php" class = "d-md-none"><i class="fas fa-shopping-cart fa-2x"></i><span class="counter counter-lg">29</span></a>
      <button class="navbar-toggler" data-toggle="open-navbar1">
        <span></span>
        <span></span>
        <span></span>
      </button>
      
        <a class="d-flex logo" href="#">
          <img width="80px" src="./assets/Logo.png" alt="">
            <h4 class="d-flex align-items-center mb-0 "><span class="h4 logo-text"> &nbsp Himalayan Luxury Beans</span></h4>
        </a>
        
    </div>

    <div class="navbar-menu" id="open-navbar1">
      <ul class="navbar-nav">
        <li class="active"><a href="index.php">Home</a></li>
        <li class="navbar-dropdown">
          <a href="./beans.php" class="dropdown-toggler" data-dropdown="my-dropdown-id">
            Beans 
            <!-- <i class="fa fa-angle-down"></i> -->
          </a>
          <!-- <ul class="dropdown" id="my-dropdown-id">
            <li><a href="#">Actions</a></li>
            <li><a href="#">Something else here</a></li>
            <li class="separator"></li>
            <li><a href="#">Seprated link</a></li>
            <li class="separator"></li>
            <li><a href="#">One more seprated link.</a></li>
          </ul> -->
        </li>
        <li class="navbar-dropdown">
          <a href="FAQ.php" class="dropdown-toggler" data-dropdown="blog">
            FAQ 
          </a>
        </li>
        <li><a href="About-us.php">About Us</a></li>
      
        <li>
          <div class="search_container mr-3">
            
            <input class="search_input mr-3" type="text" placeholder="Search">
        </div>
        </li>
      </ul>
    </div>
    <a class="d-none d-md-block" href="cart.php"><i class="fas fa-shopping-cart fa-2x"></i><span class="counter counter-lg">28</span></a>
  </div>
</nav>

      <script>
    // Dashboard: https://codepen.io/themustafaomar/pen/jLMPKm

let dropdowns = document.querySelectorAll('.navbar .dropdown-toggler')
let dropdownIsOpen = false

// Handle dropdown menues
if (dropdowns.length) {
  // Usually I don't recommend doing this (adding many event listeners to elements have the same handler)
  // Instead use event delegation: https://javascript.info/event-delegation
  // Why: https://gomakethings.com/why-event-delegation-is-a-better-way-to-listen-for-events-in-vanilla-js
  // But since we only have two dropdowns, no problem with that. 
  dropdowns.forEach((dropdown) => {
    dropdown.addEventListener('click', (event) => {
      let target = document.querySelector(`#${event.target.dataset.dropdown}`)

      if (target) {
        if (target.classList.contains('show')) {
          target.classList.remove('show')
          dropdownIsOpen = false
        } else {
          target.classList.add('show')
          dropdownIsOpen = true
        }
      }
    })
  })
}

// Handle closing dropdowns if a user clicked the body
window.addEventListener('mouseup', (event) => {
  if (dropdownIsOpen) {
    dropdowns.forEach((dropdownButton) => {
      let dropdown = document.querySelector(`#${dropdownButton.dataset.dropdown}`)
      let targetIsDropdown = dropdown == event.target

      if (dropdownButton == event.target) {
        return
      }

      if ((!targetIsDropdown) && (!dropdown.contains(event.target))) {
        dropdown.classList.remove('show')
      }
    })
  }
})

// Open links in mobiles
function handleSmallScreens() {
  document.querySelector('.navbar-toggler')
    .addEventListener('click', () => {
    let navbarMenu = document.querySelector('.navbar-menu')

    if (navbarMenu.style.display === 'flex') {
      navbarMenu.style.display = 'none'
      return
    }

    navbarMenu.style.display = 'flex'
  })
}

handleSmallScreens()
</script>