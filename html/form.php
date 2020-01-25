<html>
    <head>
        <title>FORM</title>
    </head>
    <body>
        <form action="backend.php" method="POST">
            <div>
                <label for="">
                    Ismi
                    <input type="text" name="ism">
                </label>
            </div>
           <div>
                <label for="">
                    Familiyasi
                    <input type="text" name="familiyasi">
                </label>
            </div>
            <div>
                <label for="">
                    Sharifi
                    <input type="text" name="sharifi">
                </label>
            </div>
            <div>
                <label for="">
                    Matn
                    <textarea name="matn" id="" cols="30" rows="10"></textarea>
                </label>
            </div>
            <div>
                <label for="">
                    Test uchun misollar
                    <input type="radio" name="abs" value="a"> A) Javob 1
                    <input type="radio" name ="abs" value="b"> B)Javob 2
                    <input type="radio" name="abs" value="c"> C) Javob 3
                </label>
            </div>
            <div>
                <input type="checkbox" name="abc" value="85"> Maktabni bitirganmisiz?
            </div>
            <button type="sumbit">Yuboriw</button>
        </form>
    </body>
</html> 