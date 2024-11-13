const body = document.body;
const theme = localStorage.getItem('theme')
console.log(theme, "theme")
// const theme = 'light'

if (theme) 
  document.documentElement.setAttribute('data-bs-theme', theme)
