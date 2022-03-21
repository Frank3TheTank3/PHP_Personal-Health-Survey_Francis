Obsticles - Project Personal Health Survey

1. Zuerst mal war es eine Herausforderung ein dynamisches Fragesystem zu erstellen. Die Fragen, Inputelementen, Index der Art von Inputelementen je nach Frage,
sowie die Checkbox Antworten in seperate String-Arrays aufgelistet und eine kurze Formel geschrieben, die diese Elemente zusammenstellt, je nach Fragenummer
und Fragevariant.

2. Weiter gab es Probleme bei der Erzeugung der Reset und Weiter Knöpfe. Diese habe ich dann ebenfalls jenach Fragenummer
dynamisch erzeugt und den Reset bei der Auswertungsseite sichtbar gemacht.

3. Zusätzlich musste ich bei dem Styling der Page einige CSS ID Klassen einführen, damit alles schön auf dem Video passt. Die Lösung
war die Position des Frage-DIVS auf Absolut zu stellen, damit ich es manuel direkt auf das Video plazieren kann.
Um es für Smartphones auch richtig zu gestalten, muss das Video zusammen mit den Fragen in einem gemeinsamen Container DIV plaziert werden.

4. Bei der Erstellung der Auswertungsseite, gab es Troubleshooting beim Anzeigen der Checkbox Values. Hierzu habe ich
die POST Antwort in ein Array umgewandlet und dieser in eine SESSION Variable abgespeichert und iterriere durch dieses
mit einem FOR Loop auf der letzten Seite.
