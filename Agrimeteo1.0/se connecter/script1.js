if("Notification" in window){
    if(Notification.permission === 'granted'){
        notify();
    }
    else{
        Notification.requestPermission().then((res) => {
            if (res === 'granted'){
                notify();
            }
            else if( res === 'denied'){
console.log(" dinied");
            }
            else if( res === 'denied'){
                console.log(" permission non accordé ");
                            }
        });
    }
}
else{
    console.error("otifications not supported");
}

function notify(){

    const notification  = new Notification("AGRIMETEO",{
        body: 'Conseils agricoles hebdomadaire'
       });
       notification.addEventListener('click', () => {
        window.open('http://localhost/Agrimeteo/se%20connecter/envoinotif.php')
       })


}