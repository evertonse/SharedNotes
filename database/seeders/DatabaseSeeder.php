<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\Note;
use \App\Models\Card;
use \App\Models\User;
use App\Models\Comment;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder {
	/**
	 * Seed the application's database.
	 *
	 * @return void
	 */

	public function run()
	{
		//\App\Models\User::factory(10)->create();

		$user = new User;
		$user->username = 'William Boner';
		$user->name 		= 'boner';
		$user->password = bcrypt('123');
		$user->save();

		$user = new User;
		$user->username = 'Alan Turing';
		$user->name 		= 'alan';
		$user->password = bcrypt('123');
		$user->save();
		
		$note = new Note;
		$note->title = "Turing Machine";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "A Turing machine is a mathematical model of computation describing an abstract machine that manipulates symbols on a strip of tape according to a table of rules";
		$note->content = "For other uses, see Turing machine (disambiguation).
															Turing machines
															Machine
															Turing machine equivalents
															Turing machine examples
															Turing machine gallery
															Variants
															Alternating Turing machine
															Neural Turing machine
															Nondeterministic Turing machine
															Quantum Turing machine
															PostTuring machine
															Probabilistic Turing machine
															Multitape Turing machine
															Multi-track Turing machine
															Symmetric Turing machine
															Total Turing machine
															Unambiguous Turing machine
															Universal Turing machine
																Zeno machine
																Science
																Alan Turing
																Category:Turing machine
																vte
																A physical Turing machine constructed by Mike Davey
																A physical Turing machine model. A true Turing machine would have unlimited tape on both sides, however, physical models can only have a finite amount of tape.
																Automata theory.svg
																About this image
																Classes of automata
																(Clicking on each layer gets an article on that subject)
																A Turing machine is a mathematical model of computation describing an abstract machine[1] that manipulates symbols on a strip of tape according to a table of rules.[2] Despite the model's simplicity, it is capable of implementing any computer algorithm.[3]

																The machine operates on an infinite[4] memory tape divided into discrete cells,[5] each of which can hold a single symbol drawn from a finite set of symbols called the alphabet of the machine. It has a head that, at any point in the machine's operation, is positioned over one of these cells, and a state selected from a finite set of states. At each step of its operation, the head reads the symbol in its cell. Then, based on the symbol and the machine's own present state, the machine writes a symbol into the same cell, and moves the head one step to the left or the right,[6] or halts the computation. The choice of which replacement symbol to write and which direction to move is based on a finite table that specifies 
																what to do for each combination of the current state and the symbol that is read.

																The Turing machine was invented in 1936 by Alan Turing,[7][8] who called it an a-machine (automatic machine).[9] It was Turing's Doctoral advisor, Alonzo Church, who later coined the term Turing machine in a review.[10] With this model, Turing was able to answer two questions in the negative:

																Does a machine exist that can determine whether any arbitrary machine on its tape is circular (e.g., freezes, or fails to continue its computational task)?
																Does a machine exist that can determine whether any arbitrary machine on its tape ever prints a given symbol?[11][12]
																Thus by providing a mathematical description of a very simple device capable of arbitrary computations, he was able to prove properties of computation in general—and in particular, the uncomputability of the Entscheidungsproblem ('decision problem').[13]

																Turing machines proved the existence of fundamental limitations on the power of mechanical computation.[14] While they can express arbitrary computations, their minimalist design makes them unsuitable for computation in practice: real-world computers are based on different designs that, unlike Turing machines, use random-access memory.

																Turing completeness is the ability for a system of instructions to simulate a Turing machine. A programming language that is Turing complete is theoretically capable of expressing all tasks accomplishable by computers; nearly all programming languages are Turing complete if the limitations of finite memory are ignored.";

		$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Espere só até K. Gurdel ver isso.";
		$comment->save();

		$note = new Note;
		$note->title = "Church-Turing thesis";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "In computability theory, the Church–Turing thesis (also known as computability thesis,[1] the Turing–Church thesis,[2] the Church–Turing conjecture, Church's thesis, Church's conjecture, and Turing's thesis) is a thesis about the nature of computable functions. It states that a function on the natural numbers can be calculated by an effective method if and only if it is computable by a Turing machine. The thesis is named after American mathematician Alonzo Church and the British mathematician Alan Turing. Before the precise definition of computable function, mathematicians often used the informal term effectively calculable to describe functions that are computable by paper-and-pencil methods. In the 1930s, several independent attempts were made to formalize the notion of computability:

In 1933, Kurt Gödel";
		$note->content = "In computability theory, the Church–Turing thesis (also known as computability thesis,[1] the Turing–Church thesis,[2] the Church–Turing conjecture, Church's thesis, Church's conjecture, and Turing's thesis) is a thesis about the nature of computable functions. It states that a function on the natural numbers can be calculated by an effective method if and only if it is computable by a Turing machine. The thesis is named after American mathematician Alonzo Church and the British mathematician Alan Turing. Before the precise definition of computable function, mathematicians often used the informal term effectively calculable to describe functions that are computable by paper-and-pencil methods. In the 1930s, several independent attempts were made to formalize the notion of computability:

In 1933, Kurt Gödel, with Jacques Herbrand, formalized the definition of the class of general recursive functions: the smallest class of functions (with arbitrarily many arguments) that is closed under composition, recursion, and minimization, and includes zero, successor, and all projections.
In 1936, Alonzo Church created a method for defining functions called the λ-calculus. Within λ-calculus, he defined an encoding of the natural numbers called the Church numerals. A function on the natural numbers is called λ-computable if the corresponding function on the Church numerals can be represented by a term of the λ-calculus.
Also in 1936, before learning of Church's work,[6] Alan Turing created a theoretical model for machines, now called Turing machines, that could carry out calculations from inputs by manipulating symbols on a tape. Given a suitable encoding of the natural numbers as sequences of symbols, a function on the natural numbers is called Turing computable if some Turing machine computes the corresponding function on encoded natural numbers.
Church,[7] Kleene,[8] and Turing[9][11] proved that these three formally defined classes of computable functions coincide: a function is λ-computable if and only if it is Turing computable, and if and only if it is general recursive. This has led mathematicians and computer scientists to believe that the concept of computability is accurately characterized by these three equivalent processes. Other formal attempts to characterize computability have subsequently strengthened this belief (see below).

On the other hand, the Church–Turing thesis states that the above three formally-defined classes of computable functions coincide with the informal notion of an effectively calculable function. Although the thesis has near-universal acceptance, it cannot be formally proven, as the concept of effective calculability is only informally defined..";

		$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "LoL.";
		$comment->save();

		
		$user = new User;
		$user->username = 'andcarv@academico.ufs.br';
		$user->name 		= 'Professor André';
		$user->password = bcrypt('professor');
		$user->save();


		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Ok, isso não parece facil, parabeéns";
		$comment->save();

		$note = new Note;
		$note->title = "Genetic algorithm";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "In computer science and operations research, a genetic algorithm (GA) is a metaheuristic inspired by the process of natural selection that belongs to the larger class of evolutionary algorithms (EA). Genetic algorithms are commonly used to generate high-quality solutions to optimization and search problems by relying on biologically inspired operators such as mutation, crossover and selection.[1] Some examples of GA applications include optimizing decision trees for better performance, solving sudoku puzzles,[2] hyperparameter optimization, etc.";
		$note->content = "Optimization problems
									In a genetic algorithm, a population of candidate solutions (called individuals, creatures, organisms, or phenotypes) to an optimization problem is evolved toward better solutions. Each candidate solution has a set of properties (its chromosomes or genotype) which can be mutated and altered; traditionally, solutions are represented in binary as strings of 0s and 1s, but other encodings are also possible.[3]

									The evolution usually starts from a population of randomly generated individuals, and is an iterative process, with the population in each iteration called a generation. In each generation, the fitness of every individual in the population is evaluated; the fitness is usually the value of the objective function in the optimization problem being solved. The more fit individuals are stochastically selected from the current population, and each individual's genome is modified (recombined and possibly randomly mutated) to form a new generation. The new generation of candidate solutions is then used in the next iteration of the algorithm. Commonly, the algorithm terminates when either a maximum number of generations has been produced, or a satisfactory fitness level has been reached for the population.

									A typical genetic algorithm requires:

									a genetic representation of the solution domain,
									a fitness function to evaluate the solution domain.
									A standard representation of each candidate solution is as an array of bits (also called bit set or bit string).[3] Arrays of other types and structures can be used in essentially the same way. The main property that makes these genetic representations convenient is that their parts are easily aligned due to their fixed size, which facilitates simple crossover operations. Variable length representations may also be used, but crossover implementation is more complex in this case. Tree-like representations are explored in genetic programming and graph-form representations are explored in evolutionary programming; a mix of both linear chromosomes and trees is explored in gene expression programming.

									Once the genetic representation and the fitness function are defined, a GA proceeds to initialize a population of solutions and then to improve it through repetitive application of the mutation, crossover, inversion and selection operators.

									Initialization
									The population size depends on the nature of the problem, but typically contains several hundreds or thousands of possible solutions. Often, the initial population is generated randomly, allowing the entire range of possible solutions (the search space). Occasionally, the solutions may be seeded in areas where optimal solutions are likely to be found.

									Selection
									Main article: Selection (genetic algorithm)
									During each successive generation, a portion of the existing population is selected to breed a new generation. Individual solutions are selected through a fitness-based process, where fitter solutions (as measured by a fitness function) are typically more likely to be selected. Certain selection methods rate the fitness of each solution and preferentially select the best solutions. Other methods rate only a random sample of the population, as the former process may be very time-consuming.

									The fitness function is defined over the genetic representation and measures the quality of the represented solution. The fitness function is always problem dependent. For instance, in the knapsack problem one wants to maximize the total value of objects that can be put in a knapsack of some fixed capacity. A representation of a solution might be an array of bits, where each bit represents a different object, and the value of the bit (0 or 1) represents whether or not the object is in the knapsack. Not every such representation is valid, as the size of objects may exceed the capacity of the knapsack. The fitness of the solution is the sum of values of all objects in the knapsack if the representation is valid, or 0 otherwise.

									In some problems, it is hard or even impossible to define the fitness expression; in these cases, a simulation may be used to determine the fitness function value of a phenotype (e.g. computational fluid dynamics is used to determine the air resistance of a vehicle whose shape is encoded as the phenotype), or even interactive genetic algorithms are used.

									Genetic operators
									Main articles: Crossover (genetic algorithm) and Mutation (genetic algorithm)
									The next step is to generate a second generation population of solutions from those selected, through a combination of genetic operators: crossover (also called recombination), and mutation.

									For each new solution to be produced, a pair of parent solutions is selected for breeding from the pool selected previously. By producing a child solution using the above methods of crossover and mutation, a new solution is created which typically shares many of the characteristics of its parents. New parents are selected for each new child, and the process continues until a new population of solutions of appropriate size is generated. Although reproduction methods that are based on the use of two parents are more biology inspired, some research[4][5] suggests that more than two parents generate higher quality chromosomes.

									These processes ultimately result in the next generation population of chromosomes that is different from the initial generation. Generally, the average fitness will have increased by this procedure for the population, since only the best organisms from the first generation are selected for breeding, along with a small proportion of less fit solutions. These less fit solutions ensure genetic diversity within the genetic pool of the parents and therefore ensure the genetic diversity of the subsequent generation of children.";

		$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Nossa que professor bom rapaz.";
		$comment->save();

		$note = new Note;
		$note->title = "NSGA-II";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "Non-dominated Sorting Genetic Algorithm";		
		$note->content = "The algorithm is implemented based on [5]. The algorithm follows the general outline of a genetic algorithm with a modified mating and survival selection. In NSGA-II, first, individuals are selected frontwise. By doing so, there will be the situation where a front needs to be split because not all individuals are allowed to survive. In this splitting front, solutions are selected based on crowding distance.

			bd6d146251c84824abc0227f4ebfdef9

			The crowding distance is the Manhatten Distance in the objective space. However, the extreme points are desired to be kept every generation and, therefore, get assigned a crowding distance of infinity.

			170f7cb5b0464f9a9f5f2ee9424acfbe

			Furthermore, to increase some selection pressure, NSGA-II uses a binary tournament mating selection. Each individual is first compared by rank and then crowding distance. There is also a variant in the original C code where instead of using the rank, the domination criterium between two solutions is used.

			Example¶
			from pymoo.algorithms.moo.nsga2 import NSGA2
			from pymoo.problems import get_problem
			from pymoo.optimize import minimize
			from pymoo.visualization.scatter import Scatter

			problem = get_problem(zdt1)

			algorithm = NSGA2(pop_size=100)

			res = minimize(problem,
										algorithm,
										('n_gen', 200),
										seed=1,
										verbose=False)

			plot = Scatter()
			plot.add(problem.pareto_front(), plot_type=line, color=black, alpha=0.7)
			plot.add(res.F, facecolor=none, edgecolor=red)
			plot.show()
			<pymoo.visualization.scatter.Scatter at 0x7efc9d212460>
			../../_images/algorithms_moo_nsga2_10_1.png
			Moreover, we can customize NSGA-II to solve a problem with binary decision variables, for example, ZDT5.

			from pymoo.algorithms.moo.nsga2 import NSGA2
			from pymoo.problems import get_problem
			from pymoo.operators.crossover.pntx import TwoPointCrossover
			from pymoo.operators.mutation.bitflip import BitflipMutation
			from pymoo.operators.sampling.rnd import BinaryRandomSampling
			from pymoo.optimize import minimize
			from pymoo.visualization.scatter import Scatter

			problem = get_problem(zdt5)

			algorithm = NSGA2(pop_size=100,
												sampling=BinaryRandomSampling(),
												crossover=TwoPointCrossover(),
												mutation=BitflipMutation(),
												eliminate_duplicates=True)

			res = minimize(problem,
										algorithm,
										('n_gen', 500),
										seed=1,
										verbose=False)

			Scatter().add(res.F).show()

			<pymoo.visualization.scatter.Scatter at 0x7efcec325d60>
			../../_images/algorithms_moo_nsga2_12_1.png";

		$note->save();


		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Um dos meus algoritmos prediletos !!!! rsrs";
		$comment->save();

		$user = new User;
		$user->username = 'andcarv';
		$user->name 		= 'Professor André';
		$user->password = bcrypt('professor');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "^^ e o meu não. oush bom d+.";
		$comment->save();

		$note = new Note;
		$note->title = "Multi-objective optimization";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "Multi-objective optimization (also known as multi-objective programming, vector optimization, multicriteria optimization, multiattribute optimization or Pareto optimization) is an area of multiple criteria decision making that is concerned with mathematical optimization problems involving more than one objective function to be optimized simultaneously. Multi-objective optimization has been applied in many fields of science, including engineering, economics and logistics where optimal decisions need to be taken in the presence of trade-offs between two or more conflicting objectives. Minimizing cost while maximizing comfort while buying a car, and maximizing performance whilst minimizing fuel consumption and emission of pollutants of a vehicle are examples of multi-objective optimization problems involving two and three objectives, respectively. In practical problems, there can be more than three objectives.";		
		$note->content = "Multi-objective optimization (also known as multi-objective programming, vector optimization, multicriteria optimization, multiattribute optimization or Pareto optimization) is an area of multiple criteria decision making that is concerned with mathematical optimization problems involving more than one objective function to be optimized simultaneously. Multi-objective optimization has been applied in many fields of science, including engineering, economics and logistics where optimal decisions need to be taken in the presence of trade-offs between two or more conflicting objectives. Minimizing cost while maximizing comfort while buying a car, and maximizing performance whilst minimizing fuel consumption and emission of pollutants of a vehicle are examples of multi-objective optimization problems involving two and three objectives, respectively. In practical problems, there can be more than three objectives.

For a nontrivial multi-objective optimization problem, no single solution exists that simultaneously optimizes each objective. In that case, the objective functions are said to be conflicting. A solution is called nondominated, Pareto optimal, Pareto efficient or noninferior, if none of the objective functions can be improved in value without degrading some of the other objective values. Without additional subjective preference information, there may exist a (possibly infinite) number of Pareto optimal solutions, all of which are considered equally good. Researchers study multi-objective optimization problems from different viewpoints and, thus, there exist different solution philosophies and goals when setting and solving them. The goal may be to find a representative set of Pareto optimal solutions, and/or quantify the trade-offs in satisfying the different objectives, and/or finding a single solution that satisfies the subjective preferences of a human decision maker (DM).

Bicriteria optimization denotes the special case in which there are two objective functions.


Contents
1	Introduction
2	Examples of applications
2.1	Economics
2.2	Finance
2.3	Optimal control
2.4	Optimal design
2.5	Process optimization
2.6	Radio resource management
2.7	Electric power systems
2.8	Inspection of Infrastructure
3	Solution
4	No-preference methods
5	A priori methods
5.1	Utility function method
5.2	Lexicographic method
5.3	Scalarizing
6	A posteriori methods
7	Interactive methods
7.1	Types of preference information
8	Hybrid methods
9	Visualization of the Pareto front
9.1	Visualization in bi-objective problems: tradeoff curve
9.2	Visualization in high-order multi-objective optimization problems
10	See also
11	References
12	External links
Introduction
A multi-objective optimization problem is an optimization problem that involves multiple objective functions.[1][2][3] In mathematical terms, a multi-objective optimization problem can be formulated as

{\displaystyle \min _{x\in X}(f_{1}(x),f_{2}(x),\ldots ,f_{k}(x))}{\displaystyle \min _{x\in X}(f_{1}(x),f_{2}(x),\ldots ,f_{k}(x))}
where the integer {\displaystyle k\geq 2}k\geq 2 is the number of objectives and the set {\displaystyle X}X is the feasible set of decision vectors, which is typically {\displaystyle X\subseteq \mathbb {R} ^{n}}{\displaystyle X\subseteq \mathbb {R} ^{n}} but it depends on the {\displaystyle n}n-dimensional application domain. The feasible set is typically defined by some constraint functions. In addition, the vector-valued objective function is often defined as";

		$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Opa já ta um pouco avançado d+ p mim.";
		$comment->save();

		$user = new User;
		$user->username = 'excyber';
		$user->name 		= 'Everton Jr.';
		$user->password = bcrypt('123');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Massss, ñ p mim.";
		$comment->save();

		$note = new Note;
		$note->title = "19-11-2022 Journla";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "Journal about my days.";
		$note->content = "---
Excercise: true
Study: true
column1: false
Journal: true
Meditation: true
Social?: true
English: true
---
I did meditate, talked a little bit with my girl about sports and stuff. I'm sicker today btw, but it didn't impede me from working out. Back to thee sports discussion, I said some pretty inspiring things I think, which was all true btw, I truly believed that. We also talked about the book we're reading, by Dale whoever, i said some things about how the book tries to give one thousand credentials for this guy, and I'm like, yes man ok I believe you ok, yeah I know I know, yep talking is effective in making money. 

Since I'm sick, everything was a little bit harder, I did a lighter aerobic, but pretty decently intense upper body weight(books) lifting. I finished and didn't masturbate, instead I decided to eat watching something happy study as I called it, after i was done eating, my reward for the day was 30 min of a movie, is harder to pay attention to a movie than some others forms of entertainment and it's more rewarding in the long run. I've realized that you NEED some sorta easy reward for something hard that you do everyday, from time to time you'll need less of that reward because the hard habit ends up becoming who you are and effectively little effort is actually needed to continue being you. Problems arise when you're trying to change into something other than now-you, difficulty arises.

Well, I did not slept well today, but i managed to make my bed and everything before i even touched the phone, didn't feel the need to spend much time on reddit, and begin to study quickly. Ate good things. I'd say today was a success even if I didn't have that much progress on BD final assignment.

Well, i'm excited to have sex, have a lotta drive, i saw some videos about masculinity and badness of tiktok. Familiarized myself with neuro focused self improvement youtuber/podcaster . Imma be honest, some of the things i heard about war and stuff, got me a little scared.

Anyways time's up, since this is not a natural thing for me to do, i still need to limit my time with this.

Ok, I'll say on more thing, people hyped me up about my grades and say in my Graduation i shoud wear a crown. And somebody found out about my 10+ IEA." ;
		$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Boa rotina cara, continue aassim.";
		$comment->save();

		$user = new User;
		$user->username = 'admin';
		$user->name 		= 'admin';
		$user->password = bcrypt('admin');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Se não retirar a parte sexual, vou ter que remover você da plataforma e remover o post. Vou avisar so dessa vez";
		$comment->save();

		$user = new User;
		$user->username = 'joana';
		$user->name 		= 'Joana Raposo';
		$user->password = bcrypt('123');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "O cara n fez nada, deixa o cara";
		$comment->save();

		$note = new Note;
		$note->title = "Raposa";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "Raposas são pequenos a médios mamíferos onívoros pertencentes a vários gêneros da família Canidae. As raposas têm o crânio achatado, orelhas triangulares verticais, focinho pontiagudo e ligeiramente arrebitado e uma cauda longa e espessa.";
		$note->content = "oze espécies pertencem ao grupo monofilético de raposas verdadeiras do gênero Vulpes. Aproximadamente outras 25 espécies atuais ou extintas são parte do grupo parafilético das raposas sul-americanas ou do grupo periférico, que consiste na raposa-orelhas-de-morcego, raposa-cinzenta e raposa-das-ilhas.[1]

As raposas vivem em todos os continentes, exceto a Antártida. De longe, a espécie mais comum e difundida de raposa é a raposa vermelha (Vulpes vulpes) com cerca de 47 subespécies reconhecidas.[2] A distribuição global das raposas, juntamente com sua ampla reputação de astúcia, contribuíram para sua proeminência na cultura popular e no folclore em muitas sociedades ao redor do mundo. A caça à raposa com matilhas de cães, há muito uma atividade estabelecida na Europa, especialmente nas Ilhas Britânicas, foi exportada por colonos europeus para várias partes do Novo Mundo.

Relações filogenéticas

Ilustração comparativa de crânios de uma raposa verdadeira (esquerda) e raposa cinza (direita), com diferentes cristas temporais e lobos subangulares indicados
Dentro de Canidae, os resultados da análise de DNA mostram várias divisões filogenéticas:

Os canídeos semelhantes a raposas, que incluem a raposa-veloz (Vulpes velox), raposa vermelha (Vulpes vulpes), raposa-do-cabo (Vulpes chama), raposa do ártico (Vulpes lagopus), and feneco (Vulpes zerda).[3]
Os canídeos semelhantes a lobos, (gênero Canis, Cuon e Lycaon) incluem o cão (Canis lupus familiaris), lobo-cinzento (Canis lupus), lobo-vermelho (Canis rufus), lobo-oriental (Canis lycaon), coiote (Canis latrans), chacal-dourado (Canis aureus), lobo-etíope (Canis simensis), chacal-de-dorso-negro (Canis mesomelas), chacal-listrado (Canis adustus), cão-selvagem-asiático (Cuon alpinus), and mabeco (Lycaon pictus).[3]
Os canídeos sul-americanos, incluindo o cachorro-do-mato (Speothos venaticus), raposa-do-campo (Lycalopex uetulus), cachorro-do-mato (Cerdocyon thous) e lobo-guará (Chrysocyon brachyurus).[3]
Vários táxons monotípicos, incluindo a raposa-orelhas-de-morcego (Otocyon megalotis), raposa-cinzenta (Urocyon cinereoargenteus), e cão-guaxinim (Nyctereutes procyonoides).[3]
Biologia

Esqueleto de raposa
Morfologia geral
As raposas são geralmente menores do que alguns outros membros da família Canidae, como lobos e chacais, embora possam ser maiores do que alguns dentro da família, como cães-guaxinins. Na maior espécie, a raposa-vermelha, os machos pesam em média entre 4,1–8,7 kg,[4] enquanto a menor espécie, o feneco, pesa apenas 0.7–1.6 kg.[5] As características das raposas geralmente incluem uma face triangular, orelhas pontudas, uma rostro alongada e uma cauda espessa. As raposas são digitígradas; elas andam na ponta dos pés. Ao contrário da maioria dos membros da família Canidae, as raposas têm garras parcialmente retráteis.[6] As vibrissas de raposa, ou bigodes, são pretas. Os bigodes no focinho, as vibrissas, têm média de 100–110 mm de comprimento, enquanto os bigodes em todos os outros lugares da cabeça são mais curtos. Bigodes (vibrissas carpais) também estão nos membros anteriores e têm 40 mm longos, apontando para baixo e para trás.[2] Outras características físicas variam de acordo com o habitat e a significância adaptativa.

As espécies de raposas diferem na cor, comprimento e densidade do pelo. As cores da pelagem variam do branco perolado ao preto e branco ao preto salpicado de branco ou cinza na parte inferior. Fenecos (e outras espécies de raposas adaptadas à vida no deserto, como raposas-anãs), por exemplo, tem orelhas grandes e pêlo curto para ajudar a manter o corpo fresco.[2][6] raposas-do-ártico, por outro lado, têm orelhas pequenas e membros curtos, bem como pêlo espesso e isolante, que ajuda a manter o corpo aquecido.[7] As raposas vermelhas possuem um pêlo tipicamente ruivo, a cauda normalmente termina com uma mancha branca tail.[8] A cor e a textura da pelagem de uma raposa podem variar devido à mudança nas estações; as peles de raposa são mais ricas e densas nos meses mais frios e mais leves nos meses mais quentes. Para se livrar da densa pelagem de inverno, as raposas trocam de pêlo uma vez por ano por volta de abril; o processo começa nos pés, sobe pelas pernas e, em seguida, ao longo das costas.[6] A cor da pelagem também pode mudar conforme o indivíduo envelhece.[2]

Dentição
A dentição de uma raposa, como todos os outros canídeos, é I 3/3, C 1/1, PM 4/4, M 3/2 = 42. (As raposas-orelhas-de-morcego têm seis molares extras, totalizando 48 dentes.) As raposas têm pares pronunciados de dentes carniceiros, o que é característico de um carnívoro. Esses pares consistem no pré-molar superior e no primeiro molar inferior, e trabalham juntos para cisalhar materiais duros como a carne. Os caninos das raposas são pronunciados, também característicos de um carnívoro, e são excelentes para agarrar presas.[9]

Comportamento

Raposa-do-ártico enrolada na neve
Na natureza, a expectativa de vida típica de uma raposa é de um a três anos, embora os indivíduos possam viver até dez anos. Ao contrário de muitos canídeos, as raposas nem sempre são animais de carga. Normalmente, elas vivem em pequenos grupos familiares, mas alguns (como raposas-do-ártico) são solitários.[2][6]

Raposas são onívoras.[10][11] Sua dieta é composta principalmente de invertebrados, como insetos, e pequenos vertebrados, como répteis e pássaros. Elas também podem comer ovos e vegetação. Muitas espécies são predadores generalistas, mas algumas (como a cachorro-do-mato) têm dietas mais especializadas. A maioria das espécies de raposas consomem cerca de 1 kg de comida todos os dias. Raposas armazenam excesso de comida, enterrando-a para consumo posterior, geralmente sob as folhas, neve ou solo.[6][12] Durante a caça, as raposas tendem a usar uma técnica de ataque específica, de modo que se agacham para se camuflar no terreno e, em seguida, usam as patas traseiras para pular com grande força e pousar em cima da presa escolhida.[2] Usando seus dentes caninos pronunciados, elas podem agarrar o pescoço da presa e sacudi-la até que esteja morta ou possa ser facilmente estripada.[2]

A raposa-cinzenta é uma das duas únicas espécies caninas conhecidas por subir em árvores regularmente";
		$note->save();


		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Life is like a bloom, lighting in the dark.";
		$comment->save();

		
		$user = new User;
		$user->username = 'gaus';
		$user->name 		= 'Carl Friedrich Gauss';
		$user->password = bcrypt('123');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "le beautiful, guys";
		$comment->save();

		$note = new Note;
		$note->title = "Johann Carl Friedrich Gauss, the Genius";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "Johann Carl Friedrich Gauss (/ɡaʊs/; German: Gauß [kaʁl ˈfʁiːdʁɪç ˈɡaʊs] (listen);[2][3] Latin: Carolus Fridericus Gauss; 30 April 1777 – 23 February 1855) was a German mathematician and physicist who made significant contributions to many fields in mathematics and science.[4] Sometimes referred to as the Princeps mathematicorum[5] (Latin for 'the foremost of mathematicians') and the greatest mathematician since antiquity, Gauss had an exceptional influence in many fields of mathematics and science, and he is ranked among history's most influential mathematicians.[6]";
		$note->content = "Johann Carl Friedrich Gauss was born on 30 April 1777 in Brunswick (Braunschweig), in the Duchy of Brunswick-Wolfenbüttel (now part of Lower Saxony, Germany), to poor, working-class parents.[7][8] His mother was illiterate and never recorded the date of his birth, remembering only that he had been born on a Wednesday, eight days before the Feast of the Ascension (which occurs 39 days after Easter). Gauss later solved this puzzle about his birthdate in the context of finding the date of Easter, deriving methods to compute the date in both past and future years.[9] He was christened and confirmed in a church near the school he attended as a child.[10]

Gauss was a child prodigy. In his memorial on Gauss, Wolfgang Sartorius von Waltershausen wrote that when Gauss was barely three years old he corrected a math error his father made; and that when he was seven, solved an arithmetic series problem faster than anyone else in his class of 100 pupils.[11] There are many versions of this story, with various details regarding the nature of the series – the most frequent being the classical problem of adding together all the integers from 1 to 100. (See also under Anecdotes below.)[12][13][14] There are many other anecdotes about his precocity while a toddler, and he made his first groundbreaking mathematical discoveries while still a teenager. He completed his magnum opus, Disquisitiones Arithmeticae, in 1798, at the age of 21, and it was published in 1801.[15] This work was fundamental in consolidating number theory as a discipline and has shaped the field to the present day.

Gauss's intellectual abilities attracted the attention of the Duke of Brunswick,[12][6] who sent him to the Collegium Carolinum (now Braunschweig University of Technology),[15] which he attended from 1792 to 1795,[16] and to the University of Göttingen from 1795 to 1798.[15] While at university, Gauss independently rediscovered several important theorems.[17] His breakthrough occurred in 1796 when he showed that a regular polygon can be constructed by compass and straightedge if the number of its sides is the product of distinct Fermat primes and a power of 2.[a] This was a major discovery in an important field of mathematics; construction problems had occupied mathematicians since the days of the Ancient Greeks, and the discovery ultimately led Gauss to choose mathematics instead of philology as a career. Gauss was so pleased with this result that he requested that a regular heptadecagon be inscribed on his tombstone. The stonemason declined, stating that the difficult construction would essentially look like a circle.[18]

The year 1796 was productive for both Gauss and number theory. He discovered a construction of the heptadecagon on 30 March.[15][19] He further advanced modular arithmetic, greatly simplifying manipulations in number theory. On 8 April he became the first to prove the quadratic reciprocity law. This remarkably general law allows mathematicians to determine the solvability of any quadratic equation in modular arithmetic. The prime number theorem, conjectured on 31 May, gives a good understanding of how the prime numbers are distributed among the integers.


Gauss's diary entry related to sum of triangular numbers (1796)
Gauss also discovered that every positive integer is representable as a sum of at most three triangular numbers on 10 July and then jotted down in his diary the note: ΕΥΡΗΚΑ! num = Δ + Δ + Δ. On 1 October he published a result on the number of solutions of polynomials with coefficients in finite fields, which 150 years later led to the Weil conjectures.

Later years and death";
			$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;$comment->owner= $user->name;
		$comment->content = "John tihs is a comment that i do iwth a very sturn face, i shall tell you exactly how i'm not enchendo linguiça.";
		$comment->save();
			
			
			$user = new User;
			$user->username = 'euler';
			$user->name 		= 'Leonhard Euler';
			$user->password = bcrypt('123');
			$user->save();
			
			$comment = new Comment;
			$comment->id_user = $user->id;
			$comment->id_note = $note->id;$comment->owner= $user->name;
			$comment->content = "Poxa muito bom esse paper, Parabéns!";
			$comment->save();

			$comment = new Comment;
			$comment->id_user = $user->id;
			$comment->id_note = $note->id;$comment->owner= $user->name;
			$comment->content = "Massss, faço melhor.";
			$comment->save();

			$note = new Note;
			$note->title = "O Teorema de Euler para Poliedros Convexos";
			$note->tags = "cc,computersciende,normal,math";
			$note->owner = $user->name;
			$note->id_owner = $user->id;
			$note->description = "Definição:

Uma superfície poliédrica limitada convexa é a reunião de um número finito de polígonos planos e convexos (ou regiões poligonais convexas), de modo que:
dois polígonos não estão num mesmo plano;
cada lado de um polígono é comum a dois e apenas dois polígonos;
havendo lados de polígonos que estão em um só polígono, estes devem formar uma única poligonal fechada, plana ou não, chamada contorno;
o plano de cada polígono deixa todos os outros polígonos num mesmo semi-espaço (condição de convexidade).";
		$note->content = "As superfícies poliédricas limitadas convexas que tem contorno são chamadas abertas. As que não têm, fechadas.
		
		
		Os elementos de uma superfície poliédrica limitada convexa são:
as faces: são os polígonos;
as arestas: são os lados dos polígonos;
os vértices: são os vértices dos polígonos;
os ângulos: são os ângulos dos polígonos.
Definição:

Considerando um número finito (n>3) de polígonos convexos (ou regiões poligonais convexas) tais que:
dois polígonos não estão num mesmo plano
cada lado de polígono é comum a dois e somente dois polígonos
o plano de cada polígono deixa os demais polígonos num mesmo semiespaço
Nestas condições ficam determinados n semiespaços, cada um dos quais tem origem no plano de um polígono e contém os restantes. A interseção desses semiespaços é chamada poliedro convexo.

Um poliedro convexo possui faces, que são os polígonos convexos, arestas que são os lados dos polígonos e vértices, que são os vértices dos polígonos. 

";

		$note->save();
		
		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;
		$comment->owner= $user->name;
		$comment->content = "Agora sim gostaria de comentar algo, isso foi foda.";
		$comment->save();

		$note->save();
		
		$user = new User;
		$user->username = 'knuth';
		$user->name 		= 'Donald Knuth';
		$user->password = bcrypt('123');
		$user->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Concordo";
		$comment->save();

		$note = new Note;
		$note->title = "An asymptotic version of a theorem of Knuth";
		$note->tags = "cc,computersciende,normal,math";
		$note->owner = $user->name;
		$note->id_owner = $user->id;
		$note->description = "A well-known theorem of Knuth establishes a bijection between permutations in  with no decreasing subsequence of length three and rectangular standard Young tableaux of shape . We prove an asymptotic version of this result: for any fixed integer , the number of permutations in  with no decreasing subsequence of length  is asymptotically equal, as , to the number of standard Young tableaux on the rectangle . This yields a new proof of Regevʼs theorem on the asymptotic number of permutations without long decreasing subsequences, and consequently an alternative, elementary evaluation of Mehtaʼs integral at .";
		$note->content = "In this note we consider the asymptotics of the number S(d, N) of permutations in the symmetric group S(N) which have no decreasing subsequence of length d + 1, in the limit where d  2
is a fixed but arbitrary positive integer and N → ∞. This is a fundamental problem in the subject of pattern avoidance in permutations, see [1] and [10, §7]. In the interest of brevity, familiarity
with Young diagrams, Young tableaux, and the Robinson–Schensted–Knuth (RSK) correspondence is
assumed. The reader is referred to Stanley’s survey [10] for the necessary background and further
references. We adhere to the notation and terminology of [10] save for the following exceptions:
the d × q rectangular Young diagram is denoted R(d, q) rather than (qd), and the number of standard
Young tableaux of shape λ is denoted dim λ rather than f λ. Recall that the dimension of a Young
diagram may be computed from Frobenius’ formula:
E-mail address: j2novak@math.uwaterloo.ca.
URL: http://www.math.uwaterloo.ca/~j2novak.
0196-8858/$ – see front matter © 2010 Elsevier Inc. All rights reserved.
doi:10.1016/j.aam.2010.04.001
50 J. Novak / Advances in Applied Mathematics 47 (2011) 49–56
dim λ = Γ (λ1 +···+ λd + 1)
d
i=1 Γ (λi − i + d + 1)

1i< jd
(λi − λj + j − i), (1)
where d is any number such that λd+1 = 0 and Γ (z) is the gamma function.
The following well-known exact formula for S(2, N) is attributed to Hammersley in [10], with the
first published proof due to Knuth [6, §5.1.4].
Theorem 1.1 (Knuth). Permutations with no decreasing subsequence of length 3 are counted by the Catalan
numbers:
S(2, N) = dim R(2, N) = (2N)!
N!(N + 1)!
.
For d > 2, there is no known closed formula for S(d, N). The main result of this note is the following asymptotic version of Knuth’s theorem.
Theorem 1.2 (Asymptotic Knuth theorem). For d fixed and n → ∞,
S(d,dn) ∼ dim R(d, 2n).
We will see below that S(d,dn) > dim R(d, 2n) as soon as d > 2, so that Theorem 1.2 is false for n
finite.
Via the RSK correspondence, an equivalent formulation of Theorem 1.2 is the following.
Theorem 1.3. The number of permutations in S(dn) with no decreasing subsequence of length d+1 is asymptotically equal, as n → ∞, to the number of involutions in S(2dn) with longest decreasing subsequence of
length exactly d and longest increasing subsequence of length exactly 2n.
By Frobenius’ formula, we have
dim R(d, q) = Γ (dq + 1)";
	$note->save();

		$comment = new Comment;
		$comment->id_user = $user->id;
		$comment->id_note = $note->id;$comment->owner= $user->name;
		$comment->content = "Sim, falei.";
		$comment->save();
		
		
		
		return $user;
	}
}
