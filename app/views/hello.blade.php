<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Test Event Calender</title>
	<link rel="stylesheet" href="{{ asset('assets/js/calendarjs/clndr.css') }}">
		<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
        <script src="{{ asset('assets/js/calendarjs/prism.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/calendarjs/underscore.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/calendarjs/moment.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/calendarjs/clndr.js') }}" type="text/javascript"></script>
        <script src="{{ asset('assets/js/calendarjs/site.js') }}" type="text/javascript"></script>
</head>
<body>
<div class="block bg-gray">
    <div class="inner">
        <div id="mini-clndr">
            <script id="mini-clndr-template" type="text/template">
                        <div class="controls">
                            <div class="clndr-previous-button">&lsaquo;</div><div class="month"><%= month %></div><div class="clndr-next-button">&rsaquo;</div>
                        </div>
                        <div class="days-container">
                            <div class="days">
                                    <div class="headers">
                                        <% _.each(daysOfTheWeek, function(day) { %><div class="day-header"><%= day %></div><% }); %>
                                    </div>
                                    <% _.each(days, function(day) { %><div class="<%= day.classes %>" id="<%= day.id %>"><%= day.day %></div><% }); %>
                            </div>
                            <div class="events">
                                    <div class="headers">
                                        <div class="x-button">x</div>
                                        <div class="event-header">EVENTS</div>
                                    </div>
                                    <div class="events-list">
                                        <% _.each(eventsThisMonth, function(event) { %>
                                            <div class="event">
                                                <a href="<%= event.url %>"><%= moment(event.date).format('MMMM Do') %>: <%= event.title %></a>
                                            </div>
                                        <% }); %>
                                    </div>
                            </div>
                        </div>
            </script>
        </div>
    </div>
</div>
</body>
</html>
