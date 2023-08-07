$(document).ready(function () {
  $.getJSON('https://jsonplaceholder.typicode.com/users', function (users) {
    let usersOutput = '<ul class="list-group">'
    users.forEach(function (user) {
      usersOutput += `
              <li class="list-group-item">
                  ${user.name}(${user.username})
              </li>
          `
    })
    usersOutput += '</ul>'
    $('#users').html(usersOutput)
  })
})
