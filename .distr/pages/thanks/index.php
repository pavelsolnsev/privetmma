{% extends 'default.php' %}

{% set BODY_CLASS = 'page-thanks' %}

{% block blocks %}
	{% set thanks = true %}
	{% include 'header/block.php' %}
	{% include 'thanks/block.php' %}
{% endblock %}

