# ZeroPHPDoc
ZeroPHP Framework Documemt and Demon Application

---

## Author:Anke

---

## Framework Method
```
1. C() : A Method Create new records extends Model Class
 - param [String feild, String value]
2. R() : A Method Retrieve existing records extends Model Class
 - param [String feild, String where]
3. U() : A Method Update existing records extends Model Class
 - param [String upval, String where]
4. D() : A Method Delete existing records extends Model Class
 - param [Int id]
```

---

## MVC Demo
Demo Code In app
In routing: Domain/hello page output Hello ZeroPHP FrameWork!

```
1. configuration routing
The following routing is configured under the conf/route.php file:
$route['/hello'] = ['Hello','hello'];
Find the helloZero method under the controller of Hello to realize business logic.

2. logical writing
/app/Controller/HelloController.php's helloZero () method:
The code is as follows:
Public function helloZero ()
{
    $helloModel = new HelloModel ();
    $page_text = $helloModel->getText ();   
    $this->render ('Hello', [[page_text] = > $page_text]);
}

3. data abstraction layer writing
The getText () method of /app/Model/HelloModel.php
The code is as follows:
Public function getText ()
{
    Return HELLO_TEXT; / / here is to configure the output Hello ZeroPHP FrameWork, so that it can be flexibly changed in the future.
}

4. view layer writing
/app/View/Hello.tpl.php
The code is as follows:
<html>
<body>
<span><? PHP echo $page_text;? ></span>
</body>
</html>

5. effect view
The browser opens the domain/hello page and outputs Hello ZeroPHP FrameWork! [domain refers to your host].
```

---

## Model CRUD Demo


---

## FAQ