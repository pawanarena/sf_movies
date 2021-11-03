SF Movie
===========

**Description of the problem and solution:**

Problem statement:

Create a service that shows on a map where movies have been filmed in San Francisco. The user should be able to filter the view using autocompletion search.


Solution Discussion:  

*Summary* 

Movie and location information are stored in two related mysql tables (movies, and movie_locations); locations are geocoded on the server side.  Movie input is acquired through a client-side jQuery autocomplete solution, and apis are handled via Get requests to a laravel framework, which returns json objects for front end rendering or API json.

*Back-End: Database and Data Seeding*

Movie and location information is stored in a relational database, so that users will not be subject to film data API limits or delays. then updated the add_movies seeding script to handle the geocoding and store the values in the database. The seeding scripts can be run periodically to update the tables with any new films. For the functionality I am providing, a relational database allows for expansion of the APIs, and is compatible with the deployment platform.

*Front End*  

jQuery is used to handle the AJAX requests, to update the DOM, and jQuery UI is used to provide the autocomplete search functionality.  Given the simplicity of the front end of this project, I found jQuery to be a good fit.

*What's Next:*
- Move the autocomplete to the server side, so that the functionality would accommodate any movie additions without maintaining a list in the main.js file
- Improve performance of geocode service by parsing/cleaning data going into geocode API.
- Improve responsiveness and front end
- Provide geospacial features (closest film sets, film tour routes)