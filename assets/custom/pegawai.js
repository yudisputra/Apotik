$(function() {
  $.ajax({
    type: "GET",
    url: "getAllpegawai/"
  }).done(function(countries) {
    countries.unshift({ id: "0", name: "" });

    $("#jsGrid").jsGrid({
      height: "500px",
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
            url: "getAllpegawai/",
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
          name: "idpegawai",
          title: "ID Pegawai",
          type: "text",
          width: 50
        },
        {
          name: "namapegawai",
          title: "Nama Pegawai",
          type: "text",
          width: 50
        },
        {
          name: "jeniskelamin",
          title: "Jenis Kelamin",
          type: "text",
          width: 50
        },
        {
          name: "notelp",
          title: "No Telepon",
          type: "text",
          width: 50
        },
        //  {
        //   name: "idjenisobat",
        //   title: "ID Jenis Obat",
        //   type: "select",
        //   items: [
        //  { Name: "1", Id: 0 },
        //  { Name: "2", Id: 1 },
        //   ],
        //   width: 50,
        //   valueField: "Id",
        //   textField: "Name"
        // },

        { type: "control" }
      ]
    });
  });
});
