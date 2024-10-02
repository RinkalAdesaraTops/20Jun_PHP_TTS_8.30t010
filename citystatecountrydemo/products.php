<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Categorywise Product List </h3>
    <label for="">Category</label>
    <select name="category" id="category" onchange="getProduct()">
        <option value="">--Select Category--</option>
    </select><br><br>
    <table border="2">
        <thead>
        <tr>
            <th>Id</th>
            <th>Product</th>
            <th>Category</th>
            <th>Price</th>
            
        </tr>
        </thead>
        <tbody id="prData">

        </tbody>
    </table>
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(()=>{
            $.ajax({
                url:"https://fakestoreapi.com/products/categories",
                method:"GET",
                dataType:"JSON",
                success:(res)=>{
                        let cat = $("#category")
                        res.forEach((i)=>{
                            cat.append(`<option value="${i}">${i}</option>`)
                        })
                },
                error:(err)=>{
                    console.log("Error is "+err)
                }
            })
        })

        const getProduct = ()=>{
            let catname = $("#category").val()
            $.ajax({
                url:"https://fakestoreapi.com/products/category/"+catname,
                method:'GET',
                dataType:'JSON',
                success:(res)=>{
                    let tr  = ''
                    let prList = $("#prData")
                        res.forEach((i)=>{
                            tr += `<tr>
                                    <td>${i.id}</td>
                                    <td>${i.title}</td>
                                    <td>${i.category}</td>
                                    <td>${i.price}</td>
                                </tr>
                            `
                        })
                        prList.html(tr)
                },
                error:(err)=>{
                    console.log("Error is "+err)
                }
            })
            
        }
    </script>
</body>
</html>