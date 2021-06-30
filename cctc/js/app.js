$(document).ready(function () {
  $('#footer-year').text(new Date().getFullYear())
  $('#tccModalBtn').click(function () {
    $('#tccVerificationFormContainer').show()
    $('#tccVerificationResultContainer').hide()
  })

  $('#odtinModalBtn').click(function () {
    $('#odtinResultContainer').hide(1000)
    $('#odtinFormContainer').show(1000)
    $('#reg-success-box').hide()
  })

  $('#tcc-verification-form').submit(function (e) {
    e.preventDefault()

    var tccno = $('#tccno')
      .val()
      .trim()

    $.ajax({
      url: `https://odirsetcc.ng/api.php?applicationNumber=${tccno}`,
      method: 'GET',
      success: function (res) {
        //var responseData = JSON.parse(res)
        console.log(res)
        $('#tccVerificationFormContainer').hide(1000)
        $('#tccVerificationResultContainer').show(1000)

        if (res.responseDesc) {
          console.log('Wrong entries')
          $('#cert-msg').text('No Record Found for this tcc!')
          $('#cert-msg').css('color', 'red')
          $('.tcc-navbar-nav li').hide()
        } else {
          $('#odTin').html(res.tin)
          $('#application-number').html(res.applicationNumber)
          $('#name').html(
            `${res.lastName} ${res.middleName} ${res.firstName} ${res.organisationName}`
          )
          $('#dateReg').html(res.regDate)
          $('#dateExp').html(res.expDate)

          tccno.val('')
        }
      },
      error: function (err) {
        console.log(err)
      }
    })
  })

  $('#OrgganisationCustomRadio').click(function () {
    $('#organisationRow').show()
    $('#individualRow').hide()

    $('#organisation-name').attr('required', true)
    $('#doc').attr('required', true)
    $('#firstname').attr('required', false)
    $('#middlename').attr('required', false)
    $('#lastname').attr('required', false)
    $('#firstname').val('')
    $('#middlename').val('')
    $('#lastname').val('')
  })

  $('#IndividualCustomRadio').click(function () {
    $('#organisationRow').hide()
    $('#individualRow').show()
    $('#firstname').attr('required', true)
    $('#middlename').attr('required', true)
    $('#lastname').attr('required', true)
    $('#organisation-name').attr('required', false)
    $('#doc').attr('required', false)
    $('#organisation-name').val('')
    $('#doc').val('')
  })

  $('#odtin-application-form').on('submit', function (e) {
    e.preventDefault()
    var firstname = $('#firstname')
      .val()
      .trim()
    var middlename = $('#middlename')
      .val()
      .trim()
    var lastname = $('#lastname')
      .val()
      .trim()
    var organisation = $('#organisation-name')
      .val()
      .trim()

    var doc = $('#doc')
      .val()
      .trim()
    var regdate = $('#reg-date').val()

    var email = $('#email')
      .val()
      .trim()

    var phone = $('#phone')
      .val()
      .trim()

    var address = $('#address')
      .val()
      .trim()

    $.ajax({
      url: `https://odirsetcc.ng/od_api.php?email=${email}&phone=${phone}&lastname=${lastname}&firstname=${firstname}&middlename=${middlename}&org=${organisation}&doc=${doc}&address=${address}`,
      method: 'GET',
      success: function (res) {
        console.log(res)

        $('#odtinFormContainer').hide(1000)
        $('#odtinResultContainer').show(1000)

        $('#reg-success-box').hide()
        var lastName = res.lastName ? res.lastName : ''
        var middlename = res.middlename ? res.middlename : ''
        var firstName = res.firstName ? res.firstName : ''
        var organisation_name = res.organisation_name
          ? res.organisation_name
          : ''

        $('#odtin-returned').html(res.odTin)
        $('#email-returned').html(res.email)
        $('#name-returned').html(
          `${lastName} ${middlename}  ${firstName} ${organisation_name}`
        )
        $('#phone-returned').html(res.phone)
        $('#odtin-msg-returned').html(res.responseDesc)

        if (res.success) {
          $('#reg-success-box').show()
          $('#odtin-reg-success').html(res.responseDesc)
          $('#odtin-returned').html('pending')
        }
      },
      error: function (err) {
        console.log(err)
      }
    })
  })
})
