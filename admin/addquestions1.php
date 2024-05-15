<?php
include "header.php";
?>

<!-- Basic Form Inputs card start --><form action="#" method="POST">
                                                <div class="form-group row">

                                                                <label class="col-sm-2 col-form-label">Semester</label>
                                                                <div class="col-sm-10">
                                                                    <select name="sem" class="form-control">
                                                                        <option value="opt1">Select the Semester</option>
                                                                        <option value="1">Semester1</option>
                                                                        <option value="2">Semester2</option>
                                                                        <option value="3">Semester3</option>
                                                                        <option value="4">Semester4</option>
                           
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Please Select the semester first</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="You can't change me" readonly>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Subject</label>
                                                                <div class="col-sm-10">
                                                                    <select name="select" class="form-control">
                                                                        <option value="opt1">Select the Subject</option>
                                                                        <?php
                           include "dbconnect.php";
                           $sql="select subject from subjects where sem='$sem'";
                          $result=mysqli_query($conn,$sql);
                          while($row=mysqli_fetch_array($result))
                           {
                          echo "<option value=".$row["subject"].">".$row["subject"]."</option>";
                           }
                           ?>
                                                                    </select>
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Enter the Mark</label>
                                                                <div class="col-sm-10">
                                                                    <input type="text" class="form-control" placeholder="Enter the mark">
                                                                </div>
                                                            </div>
                                                            <div class="form-group row">
                                                                <label class="col-sm-2 col-form-label">Textarea</label>
                                                                <div class="col-sm-10">
                                                                    <textarea rows="5" cols="5" class="form-control" placeholder="Default textarea"></textarea>
                                                                </div>
                                                            </div>
                                                        </form>
                                                            
                                                        </div>
                                                        
                                                 
<?php
include "footer.php";
?>