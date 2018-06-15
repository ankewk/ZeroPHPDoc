# ZeroPHPDoc
ZeroPHP PHP Framework Documemts and Demon Applications

---

## Author:Anke

---

## Framework Method
```
### Model Class
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

Demo Code In app
In routing: Domain/user page output User CRUD ZeroPHP FrameWork!

```
1. configuration routing
The following routing is configured under the conf/route.php file:
$route['/user'] = ['User','index'];
Find the indexZero method under the controller of Hello to realize business logic.

2. logical writing
/app/Controller/UserController.php's indexZero () method:
The code is as follows:
public function indexZero()
{
    $userModel = new UserModel();
    //creat user
    $user = "'anke','27'";
    $uid = $userModel->create($user);
    var_dump($uid);

    //retrieve user
    $user = $userModel->retrieve('name', 'id=2');
    var_dump($user);

    //update user
    $user = $userModel->update("name='wk'", 'id=2');
    var_dump($user);

    //delete user
    $isDel = $userModel->delete(1);
    var_dump($isDel);
    exit;
}

3. data abstraction layer writing
The create() retrieve() update()  delete() method of /app/Model/UserModel.php
The code is as follows:
public function __construct() 
{
    parent::__construct();
    $this->table = 'user';
    $this->feild = '`name`, `age`';
}

public function create($user)
{
    $this->value = $user;
    $rs = $this->C();
    return $rs;
}

public function retrieve($feild, $where)
{
    $this->feild = $feild;
    $this->where = $where;
    $user = $this->R();
    return $user;
}

public function update($upval, $where)
{
    $this->upval = $upval;
    $this->where = $where;
    $rs = $this->U();
    return $rs;
}

public function delete($id)
{
    $this->id = $id;
    $rs = $this->D();
    return $rs;
}

It's use C() R() U() D() methods extends Model Class

4. effect view
The browser opens the domain/user page and outputs Hello ZeroPHP FrameWork! [domain refers to your host].
```
---

## Validate Param Demo

1. configuration routing
The following routing is configured under the conf/route.php file:
$route['/form'] = ['User', 'form'];
Find the formZero method under the controller of User to realize business logic.

2. logical writing
/app/Controller/UserController.php's formZero () method:
The code is as follows:
public function formZero ()
{
    $param = [
        'a' => 'string',
    ];
    $request = $this->Request();
    $request->validation($param);
    $a = $request->getParam('a');
    var_dump($a);exit;
}

3. Test
Under the command line use curl
GET: curl http://127.0.0.1:9008/form?a=1111
POST: curl -d "a=1" http://127.0.0.1:9008/form

---

## FAQ
```
1. Q: How to install?
   A: composer global require "ankewk/zerophp:dev-master"

2. Q: What are the application scenarios?
   A: H5 App or min PHP Application...
```