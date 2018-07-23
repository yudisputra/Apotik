$(function() {
  $.ajax({
    type: "GET",
    url: "getAlljenisobat/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "600px",
      width: "100%",
      filtering: true,
      inserting: true,
      editing: true,
      sorting: true,
      paging: true,
      autoload: true,
      pageSize: 10,
      pageButtonCount: 5,
      deleteConfirm: "Do you really want to delete client?",
      controller: {
        loadData: function(filter) {
          return $.ajax({
            type: "GET",
            url: "getAlljenisobat/",
            data: filter
          });
        },
        insertItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "add/",
            data: item
          });
        },
        updateItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "update/",
            data: item
          });
        },
        deleteItem: function(item) {
          return $.ajax({
            type: "POST",
            url: "delete/",
            data: item
          });
        }
      },
      fields: [
        {
          name: "idjenisobat",
          title: "ID JenisObat",
          type: "text",
          width: 50
        },
        {
          name: "jenisobat",
          title: "Jenis Obat",
          type: "text",
          width: 150
        },
        

        { type: "control" }
      ]
    });
  });
});
