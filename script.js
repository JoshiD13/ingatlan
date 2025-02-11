var r = document.querySelector(':root');

function darkmod() {
    var btn = document.getElementById("gomb");

    if (btn.innerText === 'Sötét mód') {
        btn.innerText = 'Világos mód';
        r.style.setProperty('--text', '#f7e7c3');
        r.style.setProperty('--background', '#0a0a0a');
        r.style.setProperty('--primary', '#1e1e1e');
        r.style.setProperty('--secondary', '#3a2f23'); 
        r.style.setProperty('--accent', '#d4af37');
        r.style.setProperty('--csuszkaszin', '#d4af37');
        localStorage.setItem('darkmode', 'true');
    } else {
        btn.innerText = 'Sötét mód';
        r.style.setProperty('--text', '#0a0a0a');
        r.style.setProperty('--background', '#fdf8e1');
        r.style.setProperty('--primary', '#fae588');
        r.style.setProperty('--secondary', '#f9dc5c');
        r.style.setProperty('--accent', '#f9dc5c');
        r.style.setProperty('--csuszkaszin', '#fdf8e1');
        localStorage.setItem('darkmode', 'false');
    }
}

window.addEventListener('load', () => {
    var savedMode = localStorage.getItem('darkmode');
    var btn = document.getElementById("gomb");

    if (savedMode === 'true') {
        btn.innerText = 'Világos mód';
        r.style.setProperty('--text', '#f7e7c3');
        r.style.setProperty('--background', '#0a0a0a');
        r.style.setProperty('--primary', '#1e1e1e');
        r.style.setProperty('--secondary', '#3a2f23');
        r.style.setProperty('--accent', '#d4af37');
        r.style.setProperty('--csuszkaszin', '#d4af37');
    } else {
        btn.innerText = 'Sötét mód';
        r.style.setProperty('--text', '#0a0a0a');
        r.style.setProperty('--background', '#fdf8e1');
        r.style.setProperty('--primary', '#fae588');
        r.style.setProperty('--secondary', '#f9dc5c');
        r.style.setProperty('--accent', '#f9dc5c');
        r.style.setProperty('--csuszkaszin', '#fdf8e1');
    }
});
