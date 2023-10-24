$("#dataTable-1").DataTable({
  autoWidth: true,
  lengthMenu: [
    [16, 32, 64, -1],
    [16, 32, 64, "All"],
  ],
  dom: "Bfrtip",
  buttons: ["copy", "csv", "excel", "pdf", "print"],
});
