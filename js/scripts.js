const notAuthedContent = document.querySelectorAll(".not-authed-content")
const authedContent = document.querySelectorAll(".authed-content")
const getAccount = localStorage.getItem("account")

if (getAccount === null) {
    authedContent.forEach(item => item.classList.add("hidded"))
} else {
    notAuthedContent.forEach(item => item.classList.add("hidded"))

    const { username, email, password } = JSON.parse(getAccount)
    if (document.querySelector(".user-name")) document.querySelector(".user-name").textContent = username
    if (document.getElementById("username")) document.getElementById("username").textContent = username
}