$(function () {
    $("#birthday").datepicker({
      changeMonth: true,
      changeYear: true,
      yearRange: "1950:2025",
      dateFormat: "dd/mm/yy"
    });
  
    var cities = [
        "Charlotte",
    "New York",
    "Washington DC",
    "Los Angeles",
    "Chicago",
    "Houston",
    "Phoenix",
    "Ankara",
    "İstanbul",
    "İzmir"
    ];
    $("#city").autocomplete({
      source: cities
    });
  
    var languages = [
      "C", "C++", "Java", "Python", "JavaScript",
      "C#", "Ruby", "Swift", "Go", "PHP"
    ];
    $("#language").autocomplete({
      source: languages
    });
  
    // Form gönderimi sonrası mesaj
    $("form").on("submit", function (e) {
      e.preventDefault(); // sayfanın yenilenmesini engeller
      alert("Submit has been completed.");
    });
  });
  