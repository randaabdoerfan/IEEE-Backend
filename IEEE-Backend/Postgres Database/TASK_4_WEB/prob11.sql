{
  "cells": [
    {
      "cell_type": "code",
      "source": [
        "Query the list of CITY names ending with vowels (a, e, i, o, u) from STATION. Your result cannot contain duplicates.\n",
        "\n",
        "https://www.hackerrank.com/challenges/weather-observation-station-7/problem?isFullScreen=true\n",
        "\n",
        "SELECT DISTINCT(CITY) FROM STATION WHERE \n",
        "CITY LIKE '%a' OR CITY LIKE '%e' OR CITY LIKE '%i' OR CITY LIKE '%o' \n",
        "OR CITY LIKE '%u';"
      ],
      "metadata": {
        "id": "MeXCvpd8CwHj"
      },
      "execution_count": null,
      "outputs": []
    }
  ],
  "metadata": {
    "colab": {
      "provenance": []
    },
    "kernelspec": {
      "display_name": "Python 3",
      "name": "python3"
    },
    "language_info": {
      "name": "python"
    }
  },
  "nbformat": 4,
  "nbformat_minor": 0
}