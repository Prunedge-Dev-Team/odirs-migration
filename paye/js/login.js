$(document).ready(function () {
 // console.log('Login.js is running!')
 console.log('!')
  $('#loginForm').submit(function (e) {
    e.preventDefault()
    var username = $('#username')
      .val()
      .trim()
    var password = $('#password')
      .val()
      .trim()
    var usertype = $('#usertype')
      .val()
      .trim()  

    var loginFormSubmittion = {
      username: username,
      password: password,
      usertype: usertype,
    }
    $('#btnLogin').text('Verifying login Details...')
    $.ajax({
      url: 'loginAjax.php',
      type: 'POST',
      data: loginFormSubmittion,

      success: function (res) {
        var responseData = JSON.parse(res)
        
        if (responseData.success && responseData.userType ==='station_manager') {
        window.location.href = 'stations/u_dashboard.php'
      
        } else  if(responseData.success && responseData.userType ==='mis_user') {
          window.location.href = 'mis/mis_dashboard.php'
        }
        else  if(responseData.success && responseData.userType ==='dpit_user') {
          window.location.href = 'dpit/dpit_dashboard.php'
        }
        else  if(responseData.success && responseData.userType ==='dhia_user') {
          window.location.href = 'dhia/dhia_dashboard.php'
        }
        else  if(responseData.success && responseData.userType ==='rra_user') {
          window.location.href = 'rra/rra_dashboard.php'
        }
        else  if(responseData.success && responseData.userType ==='sadmin_user') {
          window.location.href = 'sadm/sadmin_dashboard.php'
        }
        else {
         
          $('.alert').show()
          $('#btnLogin').text('Login')
          return false
          
        }
      },
      error: function (err) {
        alert(err, 'error')
        $('#btnLogin').text('Login')
      }
    })
  })
})
