from soccerTeam import soccerTeam

n = int(input("Masukkan banyaknya tim yang akan di input: "))
teamList = [soccerTeam() for i in range(n)]
i = 0
for i in range(n):
	print("masukkan nama tim", (i+1), ":")
	name = input()

	print("masukkan negara asal tim", (i+1), ":")
	nation = input()

	print("masukkan tahun berdiri tim", (i+1), ":")
	year_founded = int(input())

	print("masukkan jumlah pemain yang akan di input:")
	m = int(input())
	player = [None] * m
	for j in range(m):
		player[j] = input()

	teamList[i].__init__(name, nation, year_founded, player)

for i in range(n):
	teamList[i].printTeam()