
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>@yield('title' , 'Default Title')</title>
</head>

<body>
    @yield('content')
    <ul>
            <li><a href="/">Home page</a></li>
       
        <li><a href="/contact">CONTACT PAGE</a>
    
        </li>
        <li> <a href="/about">About Page</a></li>
        
    </ul>
</body>
<script>

// let a = () => {
//     return new Promise((resolve, reject)=> {
//         setTimeout(() => {
//             resolve({name:'mnn', data: 'ffff'})
//         }, 1000)
//     })
// }

// a().then(res => {
//     console.log(res)
// }).catch(err => {
//     console.log(err)
// })

let vvvv = () => {
    return new Promise ((res, rejc) => {
        setTimeout(() => {
            console.log(2)
            res('')
        }, 1000)
    })
}

let ccc = () => {
    return new Promise ((res, rejc) => {
        setTimeout(() => {
            console.log(3)
            res('')
        }, 1000)
    })
}

let a = () => {
   
    console.log(1)
}

let c = () => {
    console.log(4)
}

let b =  callback => {
    vvvv().then(res  => {
        callback.then(resss => {
          
        })
    })
    // let res = await  vvvv()
    // callback()
    ccc()
            c()
}



a()
b()
</script>
</html>
