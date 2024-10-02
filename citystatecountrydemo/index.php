<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>City State Country Demo</h3>
    <label>Country</label>
    <select name="country" id="country" onchange="getState()">
            <option value="">--Select Country</option>
    </select><br><br>

    <label>State</label>
    <select name="state" id="state" onchange="getCity()">
            <option value="">--Select State</option>
    </select><br><br>
    
    <label>City</label>
    <select name="city" id="city">
            <option value="">--Select City</option>
    </select><br><br>
    
    
    <script src="https://code.jquery.com/jquery-3.7.1.min.js" integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>
    <script>
        $(document).ready(()=>{
           $.ajax({
                url: 'https://www.universal-tutorial.com/api/countries',
                method: 'GET',
                dataType:'JSON',
                headers: {
                    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJyaW5rYWxhZGVzYXJhLnRvcHNAZ21haWwuY29tIiwiYXBpX3Rva2VuIjoiQmoyTVY1czJld0RaSDZHdkpJM1oyTzE2NGEwR21hbmUyQkQ2Z2lJNk1adGJlb3E0ZVlyTnN5dXdDN2NCbGh2MkFFbyJ9LCJleHAiOjE3Mjc1ODI0NDJ9.jOcEQyNQUYy7veedzWRvAf9WQh2UpKqO4njZuHyXjGw",
                    "Accept": "application/json"
                },
                success: function(res) {
                    const countryDropdown = $('#country');
                    res.forEach(function(country) {
                        countryDropdown.append('<option value="' + country.country_name + '">' + country.country_name + '</option>');
                    });
                },
                error: function(err) {
                    console.log(err);
                }
            });

           
        })
        const getState = ()=>{
            let countryname = document.getElementById('country').value;
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/states/'+countryname,
                method: 'GET',
                dataType:'JSON',
                headers: {
                    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJyaW5rYWxhZGVzYXJhLnRvcHNAZ21haWwuY29tIiwiYXBpX3Rva2VuIjoiQmoyTVY1czJld0RaSDZHdkpJM1oyTzE2NGEwR21hbmUyQkQ2Z2lJNk1adGJlb3E0ZVlyTnN5dXdDN2NCbGh2MkFFbyJ9LCJleHAiOjE3Mjc1ODI0NDJ9.jOcEQyNQUYy7veedzWRvAf9WQh2UpKqO4njZuHyXjGw",
                    "Accept": "application/json"
                },
                success: function(res) {
                    const stateDropdown = $('#state');
                    res.forEach(function(state) {
                        stateDropdown.append('<option value="' + state.state_name + '">' + state.state_name + '</option>');
                    });
                },
                error: function(err) {
                    console.log(err);
                }
            });

           
        
        }
        const getCity = ()=>{
            let statename = $("#state").val()
            $.ajax({
                url: 'https://www.universal-tutorial.com/api/cities/'+statename,
                method: 'GET',
                dataType:'JSON',
                headers: {
                    "Authorization": "Bearer eyJhbGciOiJIUzI1NiIsInR5cCI6IkpXVCJ9.eyJ1c2VyIjp7InVzZXJfZW1haWwiOiJyaW5rYWxhZGVzYXJhLnRvcHNAZ21haWwuY29tIiwiYXBpX3Rva2VuIjoiQmoyTVY1czJld0RaSDZHdkpJM1oyTzE2NGEwR21hbmUyQkQ2Z2lJNk1adGJlb3E0ZVlyTnN5dXdDN2NCbGh2MkFFbyJ9LCJleHAiOjE3Mjc1ODI0NDJ9.jOcEQyNQUYy7veedzWRvAf9WQh2UpKqO4njZuHyXjGw",
                    "Accept": "application/json"
                },
                success: function(res) {
                    const cityDropdown = $('#city');
                    res.forEach(function(city) {
                        cityDropdown.append('<option value="' + city.city_name + '">' + city.city_name + '</option>');
                    });
                },
                error: function(err) {
                    console.log(err);
                }
            });        
        }
    </script>
</body>
</html>