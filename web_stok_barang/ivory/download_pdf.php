<?php
												/*
													$servername = "localhost";
													$username = "root";
													$password = "";
													$dbname = "db_ivory";
													$conn = new mysqli($servername, $username, $password, $dbname);
													$sql = "SELECT * FROM input3 WHERE id ='".$id."'";
													$result = $conn->query($sql);
													
													$name= $_GET['nama'];

													header('Content-Description: File Transfer');
													header('Content-Type: application/force-download');
													header("Content-Disposition: attachment; filename=\"" . basename($name) . "\";");
													header('Content-Transfer-Encoding: binary');
													header('Expires: 0');
													header('Cache-Control: must-revalidate');
													header('Pragma: public');
													header('Content-Length: ' . filesize($name));
													ob_clean();
													flush();
													readfile("uploads/".$name); //showing the path to the server where the file is to be download
													exit;
													*/
													
													//Get the file id form $_GET['file'];
														$nama = $_GET['nama'];
												/*
														include "Connection.php";

														$servername = "localhost";
														$username = "root";
														$password = "";
														$dbname = "db_ivory";

														// Create connection
														$conn = new mysqli($servername, $username, $password, $dbname);
														//Get the row from db
														$sql = "SELECT upload FROM history WHERE upload = $nama";
														$result = $conn->query($sql);
													*/
														$dir = "uploads/"; // trailing slash is important
														$file = $dir . $nama;
														if (file_exists($file))
															{
															header('Content-Description: File Transfer');
															header('Content-Type: application/octet-stream');
															header('Content-Disposition: attachment; filename='.basename($file));
															header('Expires: 0');
															header('Cache-Control: must-revalidate');
															header('Pragma: public');
															header('Content-Length: ' . filesize($file));
															ob_clean();
															flush();
															readfile($file);
															exit;
															}

?>