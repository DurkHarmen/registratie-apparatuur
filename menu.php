<html>
<head>
<style>
    button{
        float:right;
    }
    div{
        float:left;
    }
    fieldset{
        padding-right:70%
    }
    legend{
        text-align: center;
    }
    table {
         width: 100%;
        border-collapse: collapse;
    }

    div, button {
        padding: 8px;
        text-align: left;
    }

    button {
        background-color: #dddddd;
        text-align: center; 
    }

    input[type='submit'] {
        background-color: #4CAF50;
        color: white;
        padding: 12px 20px;
        
        cursor: pointer;
    }

    input[type='submit']:hover {
        background-color: #45a049;
    }
    .phpscript{
        margin-top: 15%;
        text-align: center;
        border-style: double;
        margin-left: 44%;
    }
    .row{
    height: 20%;
    }
</style>
</head>
<body>
    <div class="apparaten">
    <form action="toevoegen pagina/toevoegen.php">
    <button> apparaten toevoegen </button>
    </form>
    </div>
    <div>
    <form action="toevoegen pagina/bewerken.php">
    <button> apparaten bewerken </button>
    </form>
    </div>
    <div>
    <form action="verwijderaparaten.php">
    <button> apparaten verwijderen </button>    
    </form>    
    </div>
    <div> 
    <form action="signup.php">
    <button> account aanmaken </button>    
    </form>
    </div>
    <div> 
    <form action="accountverwijderen.php">
    <button> account verwijderen </button>    
    </form>
    </div>
    <div>
    <form action="category toevoegen.php">
    <button> categorie toevoegen </button>    
    </form>    
    </div>
    <div>
    <form action="categoryverwijderen.php">
    <button> categorie verwijderen </button>    
    </form>    
    </div>
    <form action="logout.php">
    <button> uitloggen </button>    
    </form>    
    </div>   
    <form action="uitleensysteem.php">
    <button> uitlenen </button>    
    </form>
    <form action="verwijderdatabase.php">
    <button> uitleningen verwijderen </button>    
    </form>
    <div>
</div>
</body>
</html>