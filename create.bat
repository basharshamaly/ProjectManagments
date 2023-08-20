git clone https://github.com/MohShDalo/jawwalTraining.git
cd jawwalTraining
for /F "delims=" %%L in ('git config --global user.username') do (set "username=%%L")
git switch -c %username%
git branch --set-upstream-to=origin/main %username%
pause