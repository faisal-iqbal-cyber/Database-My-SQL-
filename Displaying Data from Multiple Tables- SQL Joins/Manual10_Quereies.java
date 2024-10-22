  								Manual 10(Inner + Outer joins)

  	Q1:
  		write query to display name , department id and department name for all employees
  	Query:
  		SELECT concat(e.FIRST_NAME," ",e.LAST_NAME)As"Name", e.depID, d.DEPARTMENT_NAME
		from employees e JOIN departments d ON(e.depID=d.DEPARTMENT_ID)

	Q2:
  		create a unique listing of all jobs that are in department 30
  	Query:
  		SELECT e.FIRST_NAME, j.JOB_TITLE, e.depID
		FROM employees e JOIN jobs j ON(e.JOB_ID=j.JOB_ID)
		where e.depID=30;

	Q3:
  		write a query to display the employee name, department name, location id  and city of all employee who earn a commision
  	Query:
  		SELECT e.FIRST_NAME, d.DEPARTMENT_NAME, l.LOCATION_ID,l.CITY, e.COMMISSION_PCT
		from employees e JOIN departments d ON(e.depID=d.DEPARTMENT_ID) NATURAL JOIN locations l
		where e.COMMISSION_PCT>0;

	Q4: 
	   Display the employee name and department name for all employees who have an A in their last names.
  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ",e.LAST_NAME)AS"Name", d.DEPARTMENT_NAME
		FROM employees e JOIN departments d ON(e.depID=d.DEPARTMENT_ID)
		WHERE e.LAST_NAME LIKE"%A";

	Q5: 
	   Write a query to display the name, department number, and department name for all employees who work in Seattle.
  		
  	Query:
  		SELECT concat(e.FIRST_NAME,"  ",e.LAST_NAME)As"Name", d.DEPARTMENT_NAME,l.CITY
		FROM employees e JOIN departments d ON(e.depID=d.DEPARTMENT_ID) NATURAL JOIN locations l
		WHERE l.CITY="Seattle";

			
	Q6: 
	   Display the employee name and employee number along with their manager’s name and manager number. Label the columns Employee, Emp#, Manager, and Mgr#, respectively.

  		
  	Query:
  		
  		SELECT concat(e.FIRST_NAME," ",e.LAST_NAME)As"Employee", e.EMPLOYEE_ID"Employee#",concat(m.FIRST_NAME," ",m.LAST_NAME)As"Manager", m.EMPLOYEE_ID"Manager#"
        FROM employees e JOIN employees m ON(e.MANAGER_ID=m.EMPLOYEE_ID)

        			--------------------------------(LEFT Outer join)-----------------
	Q7: 
	   Modify query # 6 to display all employees including King, who has no manager. Order the results by the employee number.

  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ",e.LAST_NAME)As"Employee", e.EMPLOYEE_ID"Employee#",concat(m.FIRST_NAME," ",m.LAST_NAME)As"Manager", m.EMPLOYEE_ID"Manager#"
		FROM employees e LEFT JOIN employees m ON(e.MANAGER_ID=m.EMPLOYEE_ID)
		ORDER BY e.EMPLOYEE_ID;

	Q8: 
	   Create a query that displays employee name, department numbers, and all the employees who 
		work in the same department as a given employee. Label the columns Department, Employee, Colleague.

  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ",e.LAST_NAME)AS"Employee", e.depID"Department", concat(d.FIRST_NAME," ",d.LAST_NAME)AS"Colleague"
		FROM employees e JOIN employees d ON(e.depID=d.depID)
		where e.EMPLOYEE_ID!=d.EMPLOYEE_ID;

	Q9: 
	   Create a query that displays the name, job title for all employees
  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ", e.LAST_NAME)As"Employee Name", j.JOB_TITLE
		from employees e JOIN jobs j ON(e.JOB_ID=j.JOB_ID)

    Q10: 
	   Create a query to display the name, department_name and hire date of all employees
  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ", e.LAST_NAME)As"Employee Name", d.DEPARTMENT_NAME"Department", e.HIRE_DATE"Hiredate"
		from employees e JOIN departments d ON(e.depID=d.DEPARTMENT_ID)
				--------------------------------(Sub Query)-----------------
   Q11: 
	   Write a query to display the name ( first name and last name ), salary, department id, job id for 
		those employees who works in the same designation as the employee works whose id is 169
  		
  	Query:
  		SELECT concat(e.FIRST_NAME," ", e.LAST_NAME)As"Employee Name", e.SALARY, e.depID, e.JOB_ID 
		from employees e 
		WHERE e.JOB_ID=(SELECT JOB_ID FROM employees WHERE EMPLOYEE_ID=169);
  		
  		



  		