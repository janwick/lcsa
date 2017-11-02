<div class="edit">
    <div class="form">
        <div class="alert alert-info">
            <span class="oi oi-info"></span> Changing password is required when editing a checker.
        </div>
        <div class="card">
            <?php if($profile) :?>
                <?php foreach($profile as $prof): ?>
                        <div class="card-body">
                                    <?php echo form_open('checkers/edit_checker/'.$prof['checker_id']); ?>
                                        <div class="form-group text-center">
                                            <h4 class="card-title"><span class="oi oi-pencil"></span> Edit checker</h4>
                                        </div>

                                        <div class="form-group">
                                            <label for="name">Name</label>
                                            <input type="text" class="form-control" name="name" placeholder="Checker name" value="<?php echo $prof['checker_name'];?>" required>
                                        </div>
                                    
                                        <div class="form-group">
                                            <label for="program">Program</label>
                                            <select name="program" id="program" class="form-control">
                                                <option value="<?php echo $prof['program_id'];?>"><?php echo $prof['program'];?></option>
                                                <?php if($programs):?>
                                                    <?php foreach($programs as $program): ?>
                                                        <option value="<?php echo $program['program_id'];?>"><?php echo $program['program'];?></option>
                                                    <?php endforeach;?>
                                                <?php endif;?>
                                            </select>
                                        </div>

                                        <div class="form-group">
                                            <label for="username">Username</label>
                                            <input type="text" class="form-control" name="username" placeholder="Create a username" value="<?php echo $prof['checker_username'];?>" required>
                                        </div>

                                        <?php if($this->session->flashdata('username_existed')): ?>
                                            <div class="form-group">
                                                <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo $this->session->flashdata('username_existed');?>
                                                </div>
                                            </div>
                                        <?php endif;?>

                                        <div class="form-group">
                                            <label for="password">Password</label>
                                            <input type="password" class="form-control" name="password" placeholder="Create a new password" required>
                                        </div>

                                        <?php if(form_error('password')): ?>
                                            <div class="form-group">
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('password');?>
                                                </div>
                                            </div>
                                        <?php endif;?>

                                        <div class="form-group">
                                            <label for="password">Confirm password</label>
                                            <input type="password" class="form-control" name="password2" placeholder="Retype created new password" required>
                                        </div>

                                        <?php if(form_error('password2')): ?>
                                            <div class="form-group">
                                                <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true">&times;</span>
                                                    </button>
                                                    <?php echo form_error('password2');?>
                                                </div>
                                            </div>
                                        <?php endif;?>

                                    
                                        <div class="form-group">
                                            <input type="submit" class="btn btn-block btn-success" value="Save" > 
                                        </div>

                                    <?php echo form_close(); ?>
                            
                        </div>
                <?php endforeach;?>
            <?php endif;?>
        </div>
     

    </div>
</div>
