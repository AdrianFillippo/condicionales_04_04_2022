let solucion = async()=>{
    let config = {
        method : "POST",
        body: JSON.stringify({
            num : 1
        })
    };
    let peticion = await fetch("api.php", config);
    let data = await peticion.text();
    document.write(data);
}

solucion();