class Menu extends HTMLElement{
    constructor(){
        super();
        this.innerHTML = `<div class="container">
        <div class="logo">
            <h1>VMapTec</h1>
        </div>
        <nav class="menu">
            <a href="../html/tramites.php">Recorrido</a>
            <a href="../html/tramites.php">Creditos</a>
            <a href="../html/tramites.php">Tramites</a>
            <a href="../html/tramites.php">Coordinadores</a>
        </nav>
    </div>`
    }
}

customElements.define('menu-component',Menu);