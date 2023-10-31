# Git and GitHub Workshop

## Workshop Overview
Welcome to the Git and GitHub Workshop my dear students ! In this workshop, you will deepen your understanding of Git and GitHub, focusing on collaboration, branching, and best practices. By the end of this workshop, you'll be well-equipped to work effectively with Git and GitHub for both personal and team projects.

## Why making branches ?

Branching make easier to work on a project with multiple people. Each person can work on a feature branch and merge their changes into the main branch when they're done. Branching also makes it easier to work on multiple features at the same time without affecting each other.

## Chapter 1: Creating and Cloning Repositories

Do this workshop by groups of 2 or 3. You will need to create a repository on GitHub and clone it to your local machine. Then, you will make changes to the repository and push them to the remote repository.

1.1. **Create a New Repository**
   - (**Only one in the group**) Create a new Git repository on GitHub. Go to your GitHub page and click the "New" button, in green, on the left side of the page.
   - Give it a name like "git-workshop".

1.2. **Clone a Repository**
   - (**Every person of the group**) Clone this repository from GitHub to your local machine.

1.3. **Make Changes and Push to GitHub**
   - (**Only one in the group**) Code something, commit your changes, and push them to the remote repository. Like a main.c file with a hello world.

# Branching and Merging

A branch will be useful for adding new features to your project without affecting the main branch. You can create a new branch for each feature you want to add to your project. Once you're done with a feature, you can merge the changes from your feature branch into the main branch.

## Chapter 2: Branching and Merging
2.1. **Create a New Branch**
   - (**Every person of the group**) Create a new branch with `git checkout -b <branch-name>`. The `-b` flag creates a new branch. Or you can use `git branch <branch-name>` to create a new branch and `git checkout <branch-name>` to switch to the new branch. You can call it by your name, like `git checkout -b john`.
   - Switch between branches. (only if you used git branch) If you're using ho-my-zsh, you can see the current branch in your terminal prompt, instead of `main` or `master`.

#### Now every person of the group have a branch with their name. So you can work on your own branch and push your changes to your branch. You can also merge your branch with the main branch.

2.2. **Make Changes in a Branch**
   - Make changes to files in your branch. You can create new files, edit existing files, or delete files. For this example, edit the main.c file and modify the hello world to print your name.
   - Add, commit, and push your changes.

2.3. **Merge Branches**
   - Switch to the main branch. `git checkout main`
   - Modify files in the main branch.
   - Merge changes from a feature branch into the main branch. `git merge <branch-name>`
   - You'll see some conflict markers in the files that were modified in both branches. Open the files and resolve the merge conflicts.
   - Resolve merge conflicts if they occur.

## Chapter 3: Collaborating on GitHub
3.1. **Create a Pull Request**
   - Make changes in your forked repository and create a pull request.
   - Discuss and review code changes with others.

3.2. **Review and Merge Pull Requests**
   - Review and approve pull requests from collaborators.
   - Merge changes into the original repository.

## Chapter 4: Best Practices and Workflows
4.1. **.gitignore**
   - Create a `.gitignore` file to exclude files and directories from version control.

4.2. **Commit Messages**
   - Write clear and descriptive commit messages.

4.3. **Rebase vs. Merge**
   - Understand when to use rebase and when to use merge in Git.

4.4. **Pulling and Updating**
   - Keep your local repository up to date with changes from the remote.

## Chapter 5: Git Tags and Releases
5.1. **Creating Tags**
   - Create annotated and lightweight tags to mark significant points in your project's history.

5.2. **Managing Releases**
   - Create a GitHub release for a specific version of your project.

## Chapter 6: Git Stash
6.1. **Stashing Changes**
   - Temporarily store changes in the stash to work on something else.

6.2. **Applying Stashed Changes**
   - Apply stashed changes to your working directory.

## Conclusion
Congratulations! You've completed the Git and GitHub Workshop. You are now equipped with the knowledge and skills to use Git and GitHub effectively in your programming projects. Remember to continue practicing and exploring advanced features to become a Git and GitHub expert.

Happy coding! 🚀
