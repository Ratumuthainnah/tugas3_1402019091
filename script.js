let hitungSilinder = () => {
    let jari = document.getElementById('jarisilinder').value;
    let tinggi = document.getElementById('tinggisilinder').value;

    let luas = 2 * Math.PI * jari * jari + 2 * Math.PI * jari * tinggi;
    let volume = Math.PI * jari * jari * tinggi;
    document.getElementById('volumesilinder').value = `${Math.floor(volume)} m³`;
    document.getElementById('luassilinder').value = `${Math.floor(luas)} m³`;

}


let hitungKerucut = () => {
    let jari = document.getElementById('jarikerucut').value;
    let tinggi = document.getElementById('tinggikerucut').value;
    let garis = document.getElementById('gariskerucut').value;

    let luas = Math.PI * jari * jari + Math.PI * jari * garis;
    let volume = 1 / 3 * Math.PI * jari * jari * tinggi;
    document.getElementById('volumekerucut').value = `${Math.floor(volume)} m³`;
    document.getElementById('luaskerucut').value = `${Math.floor(luas)} m³`;

}

let hitungBola = () => {
    let jari = document.getElementById('jaribola').value;

    let luas = 4 * Math.PI * jari * jari;
    let volume = 4 / 3 * Math.PI * jari * jari * jari;
    document.getElementById('volumebola').value = `${Math.floor(volume)} m³`;
    document.getElementById('luasbola').value = `${Math.floor(luas)} m³`;

}