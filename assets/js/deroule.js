document.getElementById('users').addEventListener('click',() => {
    let conn = document.getElementById('conn').style;
    conn.display = conn.display=="block" ? "none" : "block"
})

document.getElementById('btncat').addEventListener('click', () => {
    let cat = document.getElementById('cat').style;
    cat.display = cat.display=="block"? "none" : "block"
})