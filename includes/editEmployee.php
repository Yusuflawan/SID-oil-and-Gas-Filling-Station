
<div class="edit-employee">
            <form action="" method="get">
                <div class="add-emp-form-title">
                    <h2>Edit Employee</h2>
                    <svg onclick="hideEditEmployeeForm()" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.--><path d="M342.6 150.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0L192 210.7 86.6 105.4c-12.5-12.5-32.8-12.5-45.3 0s-12.5 32.8 0 45.3L146.7 256 41.4 361.4c-12.5 12.5-12.5 32.8 0 45.3s32.8 12.5 45.3 0L192 301.3 297.4 406.6c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L237.3 256 342.6 150.6z"/></svg>
                </div>
                <input type="hidden" id="empId" name="empId">
                <div class="input-container">
                    <input type="text" id="firstName" name="newFirstName" required placeholder="First Name">
                    <label for="firstName">First Name</label>
                </div>
                <div class="input-container">
                    <input type="text" id="lastName" name="newLastName" required placeholder="Last Name">
                    <label for="lastName">Last Name</label>
                </div>
                <div class="input-container">
                    <input type="email" id="email" name="newEmail" required placeholder="Email">
                    <label for="email">Email</label>
                </div>
                <div class="input-container">
                    <input type="text" id="phone" name="newPhone" required placeholder="Phone">
                    <label for="phone">Phone</label>
                </div>
                <div class="input-container">
                    <input type="text" id="salary" name="newSalary" required placeholder="Salary">
                    <label for="salary">Salary</label>
                </div>
                <div class="add-and-cancel">
                    <!-- <button class="cancelEdit" type="button" name="" onclick="hideEditEmployeeForm()">Cancel</button> -->
                    <button type="submit" name="editEmployeeBtn">Confirm Edit</button>
                </div>
            </form>
        </div>
        