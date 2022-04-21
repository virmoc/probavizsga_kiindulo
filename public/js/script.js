$(function () {
    const myAjax = new MyAjax();
    const szakdogaTomb = [];
    let apivegpont = "/api/";

    myAjax.adatBetolt(apivegpont + "szakdogak",szakdogaTomb,szakdogaMegjelen);

    function szakdogaMegjelen(megjelenit) {
        console.log(megjelenit);
        console.log(megjelenit);
        const szuloelem = $(".tablazat_sorai");
        const sablonelem = $("#sablonhoz .szakdoga");
        szuloelem.empty();
        sablonelem.show();

        megjelenit.forEach(function (elem) {
            let node = sablonelem.clone().appendTo(szuloelem);
            const obj = new Szakdoga(node, elem);
        });
        sablonelem.hide();
    }

    $(window).on("torles", (event) => {
        console.log(event.detail.id);
        myAjax.adatTorles(apivegpont+"szakdogak", event.detail.id);
        window.location.reload();
    });

    $(window).on("modositas", (event) => {
        console.log(event.detail);
        console.log(event.detail.id);
        $("#szakdogaId").val(event.detail.id);
        console.log($("#szakdogaId").val());
        $("#szakdoga_nev").val(event.detail.szakdoga_nev);
        $("#githublink").val(event.detail.githublink);
        $("#oldallink").val(event.detail.oldallink);
        $("#tagokneve").val(event.detail.tagokneve);
    });

    $("#modosit").on("click", () =>{
        
        let adat= {}
        adat.id= $("#szakdogaId").val();
        adat.szakdoga_nev= $("#szakdoga_nev").val();
        adat.githublink=$("#githublink").val();
        adat.oldallink= $("#oldallink").val();
        adat.tagokneve= $("#tagokneve").val();
        console.log(adat);
        myAjax.adatPut(apivegpont+"szakdogak", adat, adat.id);
        myAjax.adatBetolt(apivegpont+"szakdogak",szakdogaTomb, szakdogaMegjelen);
        
        $("#szakdogaId").val('');
        $("#szakdoga_nev").val('');
        $("#githublink").val('');
        $("#oldallink").val('');
        $("#tagokneve").val('');
    });

    
});