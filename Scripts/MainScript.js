//select 
var selects = document.querySelectorAll('select');
var instances = M.FormSelect.init(selects, {});

const sliders = document.querySelectorAll('.slider');
M.Slider.init(sliders, {});

//sidenav 
const sideNav = document.querySelector(".sidenav");
M.Sidenav.init(sideNav, {});

document.write(instances);

const dropMenus = document.querySelectorAll(".dropdown-trigger");
M.Dropdown.init(dropMenus, {});

const datePicker = document.querySelectorAll(".datepicker");
M.Datepicker.init(datePicker, {});
