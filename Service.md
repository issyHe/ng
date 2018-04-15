AngularJS服务
=====

*  constant / 常量

> 特性：
>   * 不可依赖其他服务
>   * 在config可用
>   * 可用于创建函数/原生对象

示例
```
serviceApp.constant('myConfig',{
    name:'code_bunny',
    age:12,
    getId:function(){
        return 1
    }
});
```

*  value 

> 特性：
>   * 不可依赖其他服务
>   * 在config不可用
>   * 可用于创建函数/原生对象

```
serviceApp.value('myConfig',{
    name:'code_bunny',
    age:12,
    getId:function(){
        return 1
    }
});
```

* Service

> 特性：
>   * 可依赖其他服务
>   * 在config不可用
>   * 不可用于创建函数/原生对象(只能传入一个constructor)

```
serviceApp.service('myConfig',function(){
    var myname = 'code_bunny';
    var age = 12;
    var id = 1;
    this.name = myname;
    this.age = age;
    this.getId = function(){
        return id
    }
});
```

* Factory

> 特性：
>   * 可依赖其他服务
>   * 在config不可用
>   * 可用于创建函数/原生对象

```
serviceApp.factory('myConfig',function(){
    var myname = 'code_bunny';
    var age = 12;
    var id = 1;
    return {
        name: myname,
        age: age,
        getId: function(){
            return id
        }
    }
});
```

* Provider

> 特性：
>   * 可依赖其他服务
>   * 在config可用
>   * 可用于创建函数/原生对象
>   * provider服务的第二个参数的返回值中必须要有$get方法(除了$get,还可以有其它方法,后面的例子会说到),$get方法就相当于factory服务的第二个参数,最后要返回一个对象,这个对象就是真正被注入的服务

```
serviceApp.provider('myConfig',function(){
    var id = 1;
    return {
        setID:function(newID){
            id = newID
        },
        $get:function(){
            var myname = 'code_bunny';
            var age = 12;
            return {
                name: myname,
                age: age,
                getId: function(){
                    return id
                }
            }
        }
    }
});
serviceApp.config(function(myConfigProvider){
    myConfigProvider.setID(2)
});
```

* 装饰服务

>同样是通过config,在参数函数中注入$provider服务,$provider服务有个decorator方法,它接受两个参数,第一个参数'name',是要被装饰的服务的名字,第二个参数是一个函数,函数中注入$delegate,$delegate就是被装饰的服务的实例,然后在函数中操作$delegate,就相当于操作了该服务的实例.

```
app.config(function($provide){
    $provide.decorator('name',function($delegate){  
        $delegate.money = '100w';   
        return $delegate
    })
});
```
