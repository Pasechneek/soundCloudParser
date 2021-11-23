
start:
	symfony server:start

check:
	symfony check:requirements

git:
	git add .
	git commit -m "-"
	git push
