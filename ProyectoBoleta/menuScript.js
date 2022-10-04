let sidebar = document.querySelector(".sidebar");
let sidebarBtn = document.querySelector(".flecha_izquierda");
sidebarBtn.onclick = function() {
  sidebar.classList.toggle("active");
  if(sidebar.classList.contains("active")){
  sidebarBtn.classList.replace(".flecha_izquierda" ,"flecha_derecha");
}else
  sidebarBtn.classList.replace("flecha_derecha", ".flecha_izquierda");
}
