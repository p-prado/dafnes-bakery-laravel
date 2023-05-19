const textarea = document.getElementById("textarea");
const count = document.getElementById("count");

function updateCount(min, max) {
    count.innerHTML = textarea.value.length;
     
    if (count.innerHTML< min || count.innerHTML > max) {
        count.classList.add('bad');
        count.classList.remove('ok')
    } else if (count.innerHTML > min) {
        count.classList.remove('bad');
        count.classList.add('ok');
    }
}
