<head>
    <title>Document</title>
</head>
<body>
    <form action="" method="post">
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" placeholder="*obbligatorio" required pattern="[a-zA-Z ]+"><br><br>

        <label for="cognome">Cognome:</label>
        <input type="text" id="cognome" name="cognome" placeholder="*obbligatorio" required pattern="[a-zA-Z ]+"><br><br>

        <label for="data_nascita">data di nascita:</label>
        <input type="date" id="data_nascita" name="data_nascita" placeholder="*obbligatorio" required><br><br>

        <label for="codice_fiscale">codice fiscale:</label>
        <input type="text" id="codice_fiscale" name="codice_fiscale" placeholder="opzionale"><br><br>

        <label for="email">email:</label>
        <input type="text" id="email" name="email" placeholder="obbligatorio" required pattern="^[^\s@]+@[^\s@]+\.[^\s@]+$"><br><br>

        <label for="cellulare">numero cellulare</label>
        <input type="text" id="cellulare" name="cellulare" placeholder="opzionale es:391234567890" pattern="^(\+39)?\d{12}$"><br><br>
        
        <input type="submit" value="Invia">

    </form>
</body>
</html>