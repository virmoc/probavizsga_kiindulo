class Szakdoga{
    constructor(node, adat){
        this.node = node;
        this.adat = adat;
        this.szakdogaId = adat.id;
        this.szakdogaNev = this.node.children(".szakdoga_nev");
        this.szakdogaGit = this.node.children(".githublink");
        this.szakdogaLink = this.node.children(".oldallink");
        this.szakdogaTagok = this.node.children(".tagokneve");
        this.setAdat(this.adat)

        this.szakdogaTorles = this.node.children(".torles").children("button");
        this.szakdogaModosit = this.node
            .children(".modositas")
            .children("button");
        this.szakdogaTorles.on("click ", () => {
            this.torlesTrigger(this.adat);
        });
        this.szakdogaModosit.on("click ", () => {
            this.modositTrigger();
        });
    }

    setAdat(adat){
        this.adat = adat;
        this.szakdogaNev.html(adat.szakdoga_nev);
        this.szakdogaGit.html(adat.githublink);
        this.szakdogaLink.html(adat.oldallink);
        this.szakdogaTagok.html(adat.tagokneve);
    }
    torlesTrigger(adat) {
        let esemeny = new CustomEvent("torles", {
            detail: this.adat,
        });

        window.dispatchEvent(esemeny);
    }
    modositTrigger() {
        let esemeny = new CustomEvent("modositas", {
            detail: this.adat,
        });
        window.dispatchEvent(esemeny);
    }
}